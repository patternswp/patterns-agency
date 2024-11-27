<?php
/**
 * Title: Featured Section 6
 * Slug: patterns-agency/featured-section-6
 * Categories: featured
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" ,"id":109,"hasParallax":true,"dimRatio":50,"minHeight":70,"minHeightUnit":"vh","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-109 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:20px"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"default","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-default-color has-alpha-channel-opacity has-default-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"default"} -->
<p class="has-default-color has-text-color" style="margin-bottom:0px;font-size:18px"><?php esc_html_e( 'Update Portfolio', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"default","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-default-color has-alpha-channel-opacity has-default-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"textColor":"default","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-default-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Transforming your digital landscape', 'patterns-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
