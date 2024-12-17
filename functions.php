<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Agency
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_AGENCY_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_AGENCY_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_AGENCY_VERSION', '1.0.1' );
define( 'PATTERNS_AGENCY_THEME_NAME', 'patterns-agency' );
define( 'PATTERNS_AGENCY_OPTION_NAME', 'patterns-agency' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_AGENCY_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_agency_run() {
	new Patterns_Agency();
}
patterns_agency_run();
