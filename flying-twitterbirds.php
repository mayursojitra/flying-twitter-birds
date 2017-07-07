<?php
/*
Plugin Name: Flying Twitter Bird
Plugin URI: https://wordpress.org/plugins/flying-twitter-birds/
Description: Twitter Bird flying animated effect by Javascript. When you'll scroll the page Up or Down, twitter bird will come in front of your page. Flying Twitter Bird found itself as the "follow me" link on the Twitter account. If you hover the bird, a "follow me" button and a "tweet this" button displayed.
Version: 1.6
Author: Mayur Sojitra	
Author URI: http://www.theandroid-mania.com/
License: GPLv2
*/

add_action( 'admin_menu', 'flying_twitter' );
add_action('wp_footer', 'flying_twitter_code');
function flying_twitter() {
 add_menu_page('Flying Twitter', 'Flying Twitter', 'manage_options', 'flying-twitter', 'flying_twitter_config',plugins_url('flying-twitter-birds/images/twitter-ico.png') ); 
}
function flying_twitter_config()
{
	if(@isset($_POST['flytwitter']))
	{
		$twt_user = $_POST['twt_user'];
		$twt_text = $_POST['twt_text'];
		$twt_js = $_POST['twt_js'];
		
		update_option("twt_user",$twt_user);
		update_option("twt_text",$twt_text);
		update_option("twt_js",$twt_js);
	}
	?>
    <div class="wrap">
    <div id="icon-options-general" class="icon32"><br /></div>
    <h2>7 Type Of  Animated Flying Twitter Bird Widget For Wordpress</h2>
    <form method="post" action="<?php echo admin_url('admin.php?page=flying-twitter');?>" name="frmtweet" id="frmtweet" >
    <table class="form-table">
    <tr valign="top">
    <th scope="row">Twitter User Name</th> 
    <td><input class="text-input" size="25" name="twt_user" value="<?php echo get_option("twt_user");?>" type="text" style="height:30px"></td>
    </tr>
    <tr valign="top">
    <th scope="row">Tweet This Text</th>
    <td><input class="text-input" maxlength="140" size="55" name="twt_text" value="<?php echo get_option("twt_text");?>" type="text" style="height:30px"></td>
    </tr>
	<tr valign="top">
    <th scope="row">Select a type of bird</th>
    <td>
    	<table><tbody><tr>
        <td>
        <input <?php echo (get_option("twt_js")=='js/twitterbird.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/twitterbird.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/twitterbird-thumb.png' , __FILE__ );?>"/></td>
        <td>
        <input <?php echo (get_option("twt_js")=='js/arrowplain.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/arrowplain.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/arrowplain-thumb.png' , __FILE__ );?>"/></td>
        <td>
        <input <?php echo (get_option("twt_js")=='js/black-hwak.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/black-hwak.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/black-hwak-thumb.png' , __FILE__ );?>"/></td>
        <td>
        <input <?php echo (get_option("twt_js")=='js/christmas.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/christmas.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/christmas-thumb.png' , __FILE__ );?>"/></td>
        <td>
        <input <?php echo (get_option("twt_js")=='js/orange-man.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/orange-man.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/orange-man-thumb.png' , __FILE__ );?>"/></td>
        <td>
        <input <?php echo (get_option("twt_js")=='js/kame-hame-ha.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/kame-hame-ha.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/kame-hame-ha-thumb.png' , __FILE__ );?>"/></td>
        <td>
        <input <?php echo (get_option("twt_js")=='js/red-hawk.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/red-hawk.js"/></td>
        <td><img class="middle" src="<?php echo plugins_url( 'images/red-hawk-thumb.png' , __FILE__ );?>"/></td>
        </tr>
        </tbody>
        </table>
    </td>
    </table>
    <p class="submit">
    <input class="button button-primary" value="Save Changes" type="submit" id="flytwitter" name="flytwitter" />
    </p>
    <legend style="margin-left:183px;"><h3></h3></legend>
  
	<p class="submit">
		<a class="button button-primary" href="http://www.theandroid-mania.com/contact/" target="_blank">Contact for Custom Birds</a>
	</p>
    
    </form>
    
    </div>
<?php
	
}
function flying_twitter_code()
{
	?>
    <script type="text/javascript">
		var path = "<?php echo plugins_url('js',__FILE__);?>";
    </script>
    <script type="text/javascript" src="<?php echo plugins_url( get_option("twt_js") , __FILE__ ); ?>"></script>
	<script type="text/javascript">
		var twitterAccount = "<?php echo get_option("twt_user"); ?>";
		var tweetThisText = "<?php echo get_option("twt_text"); ?>";
		tripleflapInit();
	</script>    
    <?php
	
}
function ftwitter_install()
{
	add_option("twt_user","mayur_sojitra");
	add_option("twt_text","Read @ PHP Scripts, WordPress Plugins | The android mania http://www.theandroid-mania.com/");
	add_option("twt_js","js/twitterbird.js");
	add_option( "ftwitter_db_version", "1.6" );
}
function ftwitter_uninstall()
{
	delete_option("twt_user");
	delete_option("twt_js"); 
	delete_option("twt_text"); 
	delete_option( "ftwitter_db_version");
}
register_activation_hook( __FILE__, 'ftwitter_install' );
register_deactivation_hook( __FILE__, 'ftwitter_uninstall' );