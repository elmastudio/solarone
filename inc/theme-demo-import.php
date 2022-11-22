<?php
/**
 * Theme Demo Import.
 *
 * @package solarone
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Demo import.
*/
function solarone_import_files() {

	return array(
		array(
			'import_file_name'           => 'SolarOne',
			'import_file_url'            => 'https://elmastudiouploads.s3.eu-central-1.amazonaws.com/solarone-demo-import.xml',
			'import_preview_image_url'	 => esc_url( 'https://elmastudiouploads.s3.eu-central-1.amazonaws.com/solarone-screenshot.png' ),
			'preview_url'                => 'https://themes.ainoblocks.io/solarone/',
		),
	);
}

/**
* Assign menus and front page after demo import
*
* @param array $selected_import array with demo import data
*/
function solarone_after_import( $selected_import ) {
}