<?php 
/**

 * Plugin Name: Sap Integration
 * Description: integrate sap system with wordpress site , use shortcode [Sap_Jobs] in jobs section or page
 * Author: Yahya Bakr 
 * Author URI: http://motaweroon.com
 * Version: 1.0.0
 */

 //Settings inline function
 add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'plugin_settings');

 function plugin_settings($links)
 {
    $links[] = '<a href="' . esc_url(admin_url('admin.php?page=sap_integration_settings')) . '">' . esc_html__('Settings', 'SAP') . '</a>';
 
     return $links;
 }


require('options.php');


function get_jobs() {

  require('jobs-page.php');

 
}

add_shortcode( 'Sap_Jobs', 'get_jobs' );