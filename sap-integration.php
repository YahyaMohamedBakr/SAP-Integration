<?php 
/**

 * Plugin Name: Sap Integration
 * Description: integrate sap system with wordpress site
 * Author: Yahya Bakr 
 * Author URI: http://motaweroon.com
 * Version: 1.0.0
 */


 add_action('admin_menu', 'sap_integration_options_page');
function sap_integration_options_page() {
    add_options_page(
        'SAP Integration Settings',
        'SAP Integration',
        'manage_options',
        'sap_integration_settings',
        'sap_integration_settings_page',
        plugin_dir_url( __FILE__ ).'/img/favicon.png',
        
        
    );
  }
  add_action( 'admin_init', 'sap_integration_options_page_init' );
  function sap_integration_options_page_init() {
  
      register_setting('sap_integration_settings', 'sap_integration_username');
      register_setting('sap_integration_settings', 'sap_integration_password');
     
  }
  
  function sap_integration_settings_page() {
    ?>
    <div class="wrap">
        <h1>SAP Integration Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('sap_integration_settings');
            do_settings_sections('sap_integration_settings');

            ?>

            <table class="form-table">
                <tr>
                    <th><label for="sap_integration_username">SAP API User Name:</label></th>
                    <td>
                        <input  type = 'text' class="regular-text" id="sap_integration_username" name="sap_integration_username" value="<?php echo get_option('sap_integration_username'); ?>" style="<?php echo empty(get_option('sap_integration_username')) ? 'border: 1px solid red' : ''; ?>">
                    </td>
                </tr>
                <tr>
                    <th><label for="sap_integration_password">password:</label></th>
                    <td>
                        <input type ='password' class="regular-text" id="sap_integration_password" name="sap_integration_password" value="<?php echo get_option('sap_integration_password'); ?>" style="<?php echo empty(get_option('sap_integration_password')) ? 'border: 1px solid red' : ''; ?>">
                    </td>
                </tr>
            
            </table>
            <?php 
            submit_button();
            ?>
        </form>
    </div>
    <?php
}


function get_jobs() {

  require('jobs-page.php');

 
}

add_shortcode( 'Sap_Jobs', 'get_jobs' );





    ?>
    
