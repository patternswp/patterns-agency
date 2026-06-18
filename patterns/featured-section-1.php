<?php
/**
 * Title: Featured Section 1
 * Slug: patterns-agency/featured-section-1
 * Categories: featured, about
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"dimensions":{"minHeight":"250px"},"layout":{"selfStretch":"fixed","flexSize":"30px"},"border":{"radius":"50px"}},"backgroundColor":"quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="border-radius:50px;min-height:250px"></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0px"><!-- wp:columns {"style":{"layout":{"selfStretch":"fixed","flexSize":"300px"},"shadow":"var:preset|shadow|natural","spacing":{"margin":{"top":"-230px"}}}} -->
<div class="wp-block-columns" style="margin-top:-230px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"},"spacing":{"margin":{"bottom":"15px"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:15px;font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e( '10+ Clinets', 'patterns-agency' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
<!-- wp:pattern {"slug":"patterns-agency/section-title-1"} /-->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"patterns-agency/card-1"} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"className":"patterns-agency-is-h-w-80 at-h at-w  at-flx at-al-itm-ctr at-jfy-cont-ctr","style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"3px"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group patterns-agency-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-secondary-background-color has-background" style="border-radius:3px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-gear-wide-connected-blue.png" style="width:40px"/></figure>
    <!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
<h5 class="wp-block-heading" style="margin-bottom:5px"><?php esc_html_e( 'Web Development', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Discover More', 'patterns-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-play-circle.png" style="width:20px"/></figure>
                    <!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-kumbh-sans-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Watch more videos', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
