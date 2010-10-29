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
	
	/**
	 * Any admin menu items we need
	 */
	function add_admin_menu_items() {

		add_submenu_page( 'themes.php', 'ONA10 Theme Options', 'Theme Options', 'manage_options', 'ona10_theme_options', array( &$this, 'options_page' ) );			

	}	
	
	function register_settings() {

			register_setting( $this->options_group, $this->options_group_name, array( &$this, 'settings_validate' ) );

			add_settings_section( 'ona10_theme_homepage_livestream', 'Homepage Livestream', array(&$this, 'settings_section'), $this->settings_page );
			add_settings_field( 'livestream_selector', 'Select a livestream', array(&$this, 'settings_livestream_selector_option'), $this->settings_page, 'ona10_theme_homepage_livestream' );
			add_settings_field( 'livestream_title', 'Livestream Title', array(&$this, 'settings_livestream_title_option'), $this->settings_page, 'ona10_theme_homepage_livestream' );

	}
	
	
	/**
	 * Setting for the livestream title
	 */
	function settings_livestream_title_option() {
		$options = $this->options;
		echo '<input type="text" id="livestream_title" name="' . $this->options_group_name . '[livestream_title]" value="' . $options['livestream_title'] . '" size="60" />';
	}
	
	/**
	 * Validation and sanitization on the settings field
	 */
	function settings_validate( $input ) {

		// Sanitize input for display_configuration
		return $input;

	}
	
	
	
	function options_page() {
		?>                                   
		<div class="wrap">
			<div class="icon32" id="icon-options-general"><br/></div>

			<h2><?php _e('ONA10 Theme Options', 'ona10-theme-options') ?></h2>

			<form action="options.php" method="post">

				<?php settings_fields( $this->options_group ); ?>
				<?php do_settings_sections( $this->settings_page ); ?>

				<p class="submit"><input name="submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" /></p>

			</form>
		</div>

		<?php
	}
	
}

global $ona10_theme_options;
$ona10_theme_options = new ONA10_Theme_Options();

// Core hooks to initialize the plugin
add_action( 'init', array( &$ona10_theme_options, 'init' ) );
add_action( 'admin_init', array( &$ona10_theme_options, 'admin_init' ) );
	
}



?>