<?php 
/**
 * options page 
 * 
 * this page to add api settings and use plugin in menu
 */



 //Regist Sap Plugin In Side Menu
add_action('admin_menu', 'sap_integration_options_page');
function sap_integration_options_page() {
      add_menu_page(
        'SAP Integration Settings',
        'SAP Integration',
        'manage_options',
        'sap_integration_settings',
        'sap_integration_settings_page',
        plugin_dir_url( __FILE__ ).'/img/favicon.png',
        3
        
        
        
    );
  }

  //Regist Sap Settings Items
  add_action( 'admin_init', 'sap_integration_options_page_init' );
  function sap_integration_options_page_init() {
      register_setting('sap_integration_settings', 'sap_integration_url');
      register_setting('sap_integration_settings', 'sap_integration_username');
      register_setting('sap_integration_settings', 'sap_integration_password');
     
     
  }
  
  //Settings Page 
  function sap_integration_settings_page() {
    ?>
    <div class="wrap">
        <h1>SAP Integration Settings</h1>
        <img style = "height:100px" src="<?= plugin_dir_url( __FILE__ ).'/img/sap.png'?>">
        <form method="post" action="options.php">
            <?php
            settings_fields('sap_integration_settings');
            do_settings_sections('sap_integration_settings');

            ?>

            <table class="form-table">
                <tr>
                    <th><label for="sap_integration_url">SAP API URL: </label></th>
                    <td>
                        <input  type = 'text' class="regular-text" id="sap_integration_url" name="sap_integration_url" value="<?php echo get_option('sap_integration_url'); ?>" style="<?php echo empty(get_option('sap_integration_url')) ? 'border: 1px solid red' : ''; ?>">
                    </td>
                </tr>
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

        <p> Use shortcode [Sap_Jobs] in jobs section or page</p>
    </div>
    <?php
}