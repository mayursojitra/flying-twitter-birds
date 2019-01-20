<?php
/*
Plugin Name: Flying Twitter Bird
Plugin URI: https://wordpress.org/plugins/flying-twitter-birds/
Description: Twitter Bird flying animated effect by Javascript. When you'll scroll the page Up or Down, twitter bird will come in front of your page. Flying Twitter Bird found itself as the "follow me" link on the Twitter account. If you hover the bird, a "follow me" button and a "tweet this" button displayed.
Version: 1.6
Author: Mayur Sojitra	
Author URI: https://github.com/mayursojitra
License: GPLv2
*/

add_action('admin_menu', 'flying_twitter');
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
    require_once "admin-manage.php";	
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