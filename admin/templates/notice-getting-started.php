<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/Patterns_Agency_Intro
 */
?>
<div id="patterns-agency-gsn" class="updated notice-info patterns-agency-gsn at-pos">
	<button class="patterns-agency-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-agency' ); ?>
	</button>
	<div class="patterns-agency-gsn-container at-flx at-gap at-p">
		<img class="patterns-agency-gsn-screenshot at-w" src="<?php echo esc_url( PATTERNS_AGENCY_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Agency', 'patterns-agency' ); ?>" />
		<div class="patterns-agency-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'patterns-agency' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( PATTERNS_AGENCY_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = patterns_agency_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plular . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'patterns-agency' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'patterns-agency' ) : esc_html__( 'plugin', 'patterns-agency' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="patterns-agency-btn-primary button button-primary button-hero patterns-agency-install-plugins">
				<?php esc_html_e( 'Get started with Patterns Agency', 'patterns-agency' ); ?>
			</button>
		</div>
	</div>
</div>
