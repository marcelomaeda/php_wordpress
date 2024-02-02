<?php
    if($_POST['aj_interspire_hidden'] == 'Y') {
        //Form data sent
        $ajinterspire_mid = $_POST['aj_interspire_mid'];
        update_option('aj_interspire_mid', $ajinterspire_mid);
         
        $ajinterspire_enable = $_POST['aj_interspire_enable'];
        update_option('aj_interspire_enable', $ajinterspire_enable);
 
        $ajinterspire_url = $_POST['aj_interspire_url'];
        update_option('aj_interspire_url', $ajinterspire_url);

        $ajinterspire_username = $_POST['aj_interspire_username'];
        update_option('aj_interspire_username', $ajinterspire_username);
 
        $ajinterspire_usertoken = $_POST['aj_interspire_usertoken'];
        update_option('aj_interspire_usertoken', $ajinterspire_usertoken);
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php
    } else {
        //Normal page display
        $ajinterspire_mid = get_option('aj_interspire_mid');
        $ajinterspire_enable = get_option('aj_interspire_enable');
        $ajinterspire_url = get_option('aj_interspire_url');
        $ajinterspire_username = get_option('aj_interspire_username');
        $ajinterspire_usertoken = get_option('aj_interspire_usertoken');
    }
?>

<div class="wrap">

	  <div id="sideblock" style="float:right;width:270px;margin-left:10px;"> 

		 <iframe width=270 height=800 frameborder="0" src="http://www.ajoft.com/pinfo.php?id=1"></iframe>

 	</div>
    <?php    echo "<h2>" . __( 'Interspire Display Options', 'oscimp_trdom' ) . "</h2>"; ?>
     
    <form name="oscimp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="aj_interspire_hidden" value="Y">
        <?php    echo "<h4>" . __( 'Mailing List Settings', 'oscimp_trdom' ) . "</h4>"; ?>
        <p><?php _e("Mailing List ID: " ); ?><input type="text" name="aj_interspire_mid" value="<?php echo $ajinterspire_mid; ?>" size="20"><?php _e(" ex: 12" ); ?></p>
        <p><?php _e("Plugin Enable: " ); ?> <select name="aj_interspire_enable"> <option value="1" <?php echo ($ajinterspire_enable == 1 ? 'selected' : '');?>>Yes</option> <option value="0" <?php echo ($ajinterspire_enable == 0 ? 'selected' : '');?>>No</option></select><?php _e(" ex: Yes/No" ); ?></p>
         <hr />
        <?php    echo "<h4>" . __( 'Interspire API Settings', 'ajint_apiset' ) . "</h4>"; ?>
        <p><?php _e("API URL: " ); ?><input type="text" name="aj_interspire_url" value="<?php echo $ajinterspire_url; ?>" size="20"><?php _e(" ex: http://www.ajoft.com/xml.php" ); ?></p>
        <p><?php _e("API Username: " ); ?><input type="text" name="aj_interspire_username" value="<?php echo $ajinterspire_username; ?>" size="20"><?php _e(" ex: ajofttec" ); ?></p>
        <p><?php _e("API Usertoken: " ); ?><input type="text" name="aj_interspire_usertoken" value="<?php echo $ajinterspire_usertoken; ?>" size="20"><?php _e(" ex: c7c3a4a200979c05fc620745930f9ce44d23ae53" ); ?></p>
         
     
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'oscimp_trdom' ) ?>" />
        </p>
    </form>
</div>