<?php 
/**

 * Plugin Name: Sap Integration
 * Description: integrate sap system with wordpress site
 * Author: Yahya Bakr 
 * Author URI: http://motaweroon.com
 * Version: 1.0.0
 */


require('options.php');


function get_jobs() {

  require('jobs-page.php');

 
}

add_shortcode( 'Sap_Jobs', 'get_jobs' );





    ?>
    
