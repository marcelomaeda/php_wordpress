<?php
/*
Plugin Name: Interspire User Subscription
Version: 1.6
Description: Integrates wordpress registration sytem with Interspire email marketing software: Registered users can automatically be subscribed in interspire mailing the wordpress interspire users subscripion plugin by Ajoft.
Author: Amazert
Author URI: http://www.ajoft.com/

License: GPL v3

Interspire Users Subscription Plugin
Copyright (C) 2008-2014, Amazert - gill@ajoft.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
/**
 * @package Main
 */

function aj_interspire_actions() {
 
 add_options_page("Interspire User Subscription", "Interspire User Subscription", 1, "Interspire_User_Subscription", "aj_interspire_admin");
 
}

function aj_interspire_admin() {
    include('interspire_admin.php');
}
 
add_action('admin_menu', 'aj_interspire_actions');

$ajinterspire_enable = get_option('aj_interspire_enable');

if($ajinterspire_enable==1){
add_action( 'user_register', 'ajoft_registration_subscribe', 10, 1 );
}

function ajoft_registration_subscribe( $user_id ) {

   $user = new WP_User( $user_id );

		$user_login = stripslashes( $user->user_login );
		$user_email = stripslashes( $user->user_email );

		$message  = sprintf( __('New user registration on %s:'), get_option('blogname') ) . "\r\n\r\n";
		$message .= sprintf( __('Username: %s'), $user_login ) . "\r\n\r\n";
		$message .= sprintf( __('E-mail: %s'), $user_email ) . "\r\n";
		
		$ajinterspire_mid = get_option('aj_interspire_mid');
        $ajinterspire_enable = get_option('aj_interspire_enable');
        $ajinterspire_url = get_option('aj_interspire_url');
        $ajinterspire_username = get_option('aj_interspire_username');
        $ajinterspire_usertoken = get_option('aj_interspire_usertoken');

		$xml = '<xmlrequest>
<username>'.$ajinterspire_username.'</username>
<usertoken>'.$ajinterspire_usertoken.'</usertoken>
<requesttype>subscribers</requesttype>
<requestmethod>AddSubscriberToList</requestmethod>
<details>
<emailaddress>'.$user_email.'</emailaddress>
<mailinglist>'.$ajinterspire_mid.'</mailinglist>
<format>html</format>
<customfields>
<item>
<fieldid>2</fieldid>
<value>'.$user_login.'</value>
</item>
</customfields>
</details>
</xmlrequest>
';

$ch = curl_init($ajinterspire_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
$result = @curl_exec($ch);
if($result === false) {
@wp_mail(
			get_option('admin_email'),
			sprintf(__('[%s] New User not able to process'), get_option('blogname') ),
			$message
		);
}else {
$xml_doc = simplexml_load_string($result);
//echo 'Status is ', $xml_doc->status, '<br/>';
if ($xml_doc->status == 'SUCCESS') {

@wp_mail(
			get_option('admin_email'),
			sprintf(__('[%s] New Subscription success'), get_option('blogname') ),
			$message
		);

} else {

@wp_mail(
			get_option('admin_email'),
			sprintf(__('[%s] New User Subscription failed'), get_option('blogname') ),
			$message
		);
}
}

}

?>