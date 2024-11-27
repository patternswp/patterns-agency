<?php
/**
 * Title: Section Title 1
 * Slug: patterns-agency/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:20px"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"quaternary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="margin-bottom:0px;font-size:18px"><?php esc_html_e( 'About Us', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Connecting your business with the world', 'patterns-agency' ); ?></h2>
<!-- /wp:heading -->
