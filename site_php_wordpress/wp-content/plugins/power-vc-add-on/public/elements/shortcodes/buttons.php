<?php
function pa_buttons( $atts, $content = null ) {
	extract(shortcode_atts(array(
	'btn_content'	=> '',
	'shape'     	=> '',
 	'url'			=> '#',
 	'target'		=> '_self',
 	'color'			=> 'theme-skin',
 	'size'			=> 'small',
	'border'		=> 'false',
	'icon'			=> '',
	'f_weight'		=> '',
	), $atts));

$border = ( 'true' == $border ) ? 'bordered-bot' : '';
$icon_str = !empty($icon)? '<i class="'.$icon.'"></i>' : '';
	$out = '
		<a href="'. $url . '" class="pa-wrap pa-button '.$color.' '.$shape.' '.$size.' '.$border.' '.$f_weight.'" target="'.$target.'"><span>'. $icon_str . $btn_content . '</span></a>';

	return $out;
}
add_shortcode('pa_button', 'pa_buttons');