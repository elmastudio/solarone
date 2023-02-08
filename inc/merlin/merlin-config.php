<?php
/**
 * Merlin WP configuration file.
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */

	$config = array(
		'directory'            => 'inc/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'dev_mode'             => true, // Enable development mode for testing.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	);

	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Demo Import', 'solarone' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'solarone' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'solarone' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'solarone' ),

		'btn-skip'                 => esc_html__( 'Skip', 'solarone' ),
		'btn-next'                 => esc_html__( 'Next', 'solarone' ),
		'btn-start'                => esc_html__( 'Start', 'solarone' ),
		'btn-try-again'            => esc_html__( 'Try Again', 'solarone' ),
		'btn-no'                   => esc_html__( 'Cancel', 'solarone' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'solarone' ),
		'btn-plugins-activate'     => esc_html__( 'Activating...', 'solarone' ),
		'btn-content-install'      => esc_html__( 'Install', 'solarone' ),
		'btn-import'               => esc_html__( 'Import', 'solarone' ),
		'btn-content-importing'    => esc_html__( 'Importing...', 'solarone' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'solarone' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'solarone' ),
		'welcome%s'                => esc_html__( 'This wizard will help you to import your theme demo content. It should take only a few minutes.', 'solarone' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'solarone' ),

		'plugins-header'           => esc_html__( 'Install Plugins', 'solarone' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'solarone' ),
		'plugins'                  => esc_html__( 'Install the recommended WordPress plugins to get your site up to speed.', 'solarone' ),
		'plugins-success%s'        => esc_html__( 'The recommended WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'solarone' ),
		'plugins-install-error%s'  => esc_html__( 'Installation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'solarone' ),
		'plugins-activate-error%s' => esc_html__( 'Activation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'solarone' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'solarone' ),

		'import-header'            => esc_html__( 'Import Demo', 'solarone' ),
		'import'                   => esc_html__( 'Import the theme demo content to your website. This could take some minutes. Please wait.', 'solarone' ),
		'import-demo-link'         => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://themes.ainoblocks.io/solarone/', esc_html__( 'View Demo', 'solarone' ) ),
		'import-action-link'       => esc_html__( 'Advanced', 'solarone' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'solarone' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your demo import is ready. You are all done.', 'solarone' ),
		'ready-action-link'        => esc_html__( 'Helpful resources', 'solarone' ),
		'ready-big-button'         => esc_html__( 'View your website', 'solarone' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.ainoblocks.io/', esc_html__( 'Documentation', 'solarone' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'site-editor.php' ), esc_html__( 'Start Customizing', 'solarone' ) ),
);

$wizard = new Merlin( $config, $strings );

