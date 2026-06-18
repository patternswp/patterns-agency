<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-agency/featured-section-5
 * Categories: call-to-action, contact, featured
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"quaternary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="margin-bottom:0px;font-size:18px"><?php esc_html_e( 'Talk to us', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Enhancing digital experiences', 'patterns-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-agency' ); ?>
<!-- /wp:shortcode -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
