<?php
/**
 * SolarOne functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SolarOne
 * @since SolarOne 1.0.0
 */

if ( ! function_exists( 'solarone_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since SolarOne 1.0.0
	 *
	 * @return void
	 */
	function solarone_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'assets/build/css/style-editor.css' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
	endif; // solarone_support
	add_action( 'after_setup_theme', 'solarone_support' );


if ( ! function_exists( 'solarone_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since SolarOne 1.0.0
	 *
	 * @return void
	 */
	function solarone_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'solarone-style',
			get_template_directory_uri() . '/assets/build/css/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'solarone-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'solarone_styles' );

/**
 * Registers pattern categories.
 *
 * @since SolarOne 1.0.0
 */
function solarone_register_pattern_categories() {

	$block_pattern_categories = array(
		'heroes'       => array( 'label' => __( 'Heroes' ) ),
		'features'     => array( 'label' => __( 'Features' ) ),
		'ctas'         => array( 'label' => __( 'CTAs' ) ),
		'teams'        => array( 'label' => __( 'Teams' ) ),
		'testimonials' => array( 'label' => __( 'Testimonials' ) ),
		'accordions'   => array( 'label' => __( 'Accordions' ) ),
		'pricing'      => array( 'label' => __( 'Pricing' ) ),
		'contact'      => array( 'label' => __( 'Contacts' ) ),
		'posts'        => array( 'label' => __( 'Posts' ) ),
		'texts'        => array( 'label' => __( 'Texts' ) ),
		'newsletters'  => array( 'label' => __( 'Newsletters' ) ),
		'header'       => array( 'label' => __( 'Headers' ) ),
		'footer'       => array( 'label' => __( 'Footers' ) ),
		'pages'        => array( 'label' => __( 'Pages' ) ),
	);

	$block_pattern_categories = apply_filters( 'aino_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}

add_action( 'init', 'solarone_register_pattern_categories' );

/**
 * Register block styles.
 *
 * @since SolarOne 1.0.0
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * TGMPA plugin activation.
 */
require_once get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'solarone_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function solarone_register_required_plugins() {

	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 */
	$plugins = array(

		array(
			'name'      => 'AinoBlocks - Gutenberg Website Builder Blocks',
			'slug'      => 'aino-blocks',
			'required'  => false,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'solarone',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}

/**
* Theme Setup Wizard.
*/
require_once get_parent_theme_file_path( '/inc/merlin/vendor/autoload.php' );
require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/inc/merlin/merlin-config.php' );
require_once get_parent_theme_file_path( '/inc/merlin/merlin-filters.php' );

// Theme Admin Page
require_once get_template_directory() . '/inc/theme-demo-import.php';
