<?php
/**
 *
 *
 */

if ( !class_exists( 'ONA10_Theme_Options' ) ) {

class ONA10_Theme_Options {
	
	var $options_group = 'ona10_theme_';
	var $options_group_name = 'ona10_theme_options';
	var $settings_page = 'ona10_theme_settings';
	
	function __construct() {
		
	}
	
	function init() {
		
		$this->options = get_option( $this->options_group_name );	

		if ( is_admin() ) {
			add_action( 'admin_menu', array(&$this, 'add_admin_menu_items') );
		}
		
	}
	
	function admin_init() {

		$this->register_settings();

	}
	
	function register_settings() {

			register_setting( $this->options_group, $this->options_group_name, array( &$this, 'settings_validate' ) );

			add_settings_section( 'ona10_theme_default', 'Settings', array(&$this, 'settings_section'), $this->settings_page );
			//add_settings_field( 'enabled', 'Enable WinerLinks', array(&$this, 'settings_enabled_option'), $this->settings_page, 'winerlinks_default' );
			//add_settings_field( 'showhide', 'Magical showy-hidey mode', array(&$this, 'settings_showhide_option'), $this->settings_page, 'winerlinks_default' );

	}
	
	/**
	 * Any admin menu items we need
	 */
	function add_admin_menu_items() {

		add_submenu_page( 'themes.php', 'ONA10 Theme Options', 'Theme Options', 'manage_options', 'ona10_theme_options', array( &$this, 'options_page' ) );			

	}
	
	
	function options_page() {
		
	}
	
}

global $ona10_theme_options;
$ona10_theme_options = new ONA10_Theme_Options();

// Core hooks to initialize the plugin
add_action( 'init', array( &$ona10_theme_options, 'init' ) );
add_action( 'admin_init', array( &$ona10_theme_options, 'admin_init' ) );
	
}



?>