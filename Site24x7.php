<?php
if ( ! defined( 'ABSPATH' ) ) {exit; }// Exit if accessed directly
/*
Plugin Name: Real User Monitoring
Plugin URI: http://www.site24x7.com/wordpress-monitoring.html
Description: Real User Monitoring (RUM) by Site24x7 provides deep and accurate insight into real users’ application experience on your WordPress setup. To get started: 1) Click the “<strong>Activate</strong>” link to the left of this description, 2) <a href="https://www.site24x7.com/signup.html?pack=4&l=en">Sign up for a free Site24x7 account</a> to get an RUM code, and 3) Go to your <a href="admin.php?page=S247_dashboard">Site24x7 configuration page</a>, and save your RUM code.
Version: 1.0
Author: Site24x7
Author URI: https://www.site24x7.com/
License: GPLv2 or later
Text Domain: Site24x7
*/
add_action('admin_menu', 's247_menu');   
function s247_menu() {
   add_menu_page('Account Configuration', 'Site24x7 RUM', 'administrator', 'S247_dashboard', 'S247_dashboard',plugins_url().'/real-user-monitoring/favicons247.png', '79');
}
function S247_dashboard() {
include ('webmon.php');
}
function s247_embedchat()
{
$s247code_str = trim(get_option('s247RumKeyDB'));
if ( !preg_match( "/[\'a-z0-9\']{24,34}/i", $s247code_str ) )
{
return;
}
$s247code_str = esc_attr($s247code_str);
$s247RumKeyVal = trim(get_option('s247RumKeyDB'));
if(strlen($s247RumKeyVal) > 0){
?>
<script type="text/javascript">var rumMOKey='<?php echo esc_textarea($s247RumKeyVal) ; ?>';(function(){if(window.performance && window.performance.timing && window.performance.navigation) {var site24x7_rum_beacon=document.createElement('script');site24x7_rum_beacon.async=true;site24x7_rum_beacon.setAttribute('src','//static.site24x7rum.com/js/rum-beacon-min.js');document.getElementsByTagName('head')[0].appendChild(site24x7_rum_beacon);}})(window)</script>
<?php
 }

}
add_action("wp_footer","s247_embedchat", 5);
?>