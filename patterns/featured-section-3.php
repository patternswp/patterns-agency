<?php
/**
 * Title: Featured Section 3
 * Slug: patterns-agency/featured-section-3
 * Categories: featured, gallery, portfolio, media
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"quaternary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="margin-bottom:0px;font-size:18px"><?php esc_html_e( 'Update Portfolio', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"quaternary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Transforming your digital landscape', 'patterns-agency' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"},"color":{"duotone":"unset"}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"width":"630px","height":"472px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" style="border-radius:5px;object-fit:cover;width:630px;height:472px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"width":"630px","height":"472px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg"  style="border-radius:5px;object-fit:cover;width:630px;height:472px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg" style="border-radius:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
