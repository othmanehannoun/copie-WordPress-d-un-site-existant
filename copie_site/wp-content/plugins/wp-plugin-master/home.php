<?php

/*
Plugin Name: Simple_plugin
Description: Just an extension of Wordpress Simple with 2 submenus: one for general plugin information and one for settings.
Version: 1.0
Author: Othmane Hannoune && lmjad ndori
Author URI: www.oth&&lmj.ma
License: GPLv2 or later
Text Domain: Othmane&Othmane
*/
?>

<?php

add_action('admin_menu', 'admin_menu');

function admin_menu () {
    
	  	add_menu_page("General information","Simple_plugin","manage_options","PLUGIN_MENU","Description_admin_page","dashicons-shield",2 );
		// add_submenu_page("PLUGIN_MENU","Settings","Settings","manage_options","PLUGIN_MENU","mt_settings_page");
		add_submenu_page("PLUGIN_MENU","Settings","Settings","manage_options","PLUGIN_SUBMENU2","mt_settings_page"); 
}


function Description_admin_page () {
  echo '<div class="wrap">
  <h1>Just an extension of Wordpress Simple with 2 submenus: one for general plugin information and one for settings
  </h1>
</div>';

include_once('show.php');

}

function mt_settings_page() {
	include_once('setting.php');
}

?>
