<?php
/**
 * Title: Card 1
 * Slug: patterns-agency/card-1
 * Categories: featured
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"},"margin":{"top":"30px"}}}} -->
<div class="wp-block-columns" style="margin-top:30px"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"className":"patterns-agency-is-h-w-80 at-h at-w  at-flx at-al-itm-ctr at-jfy-cont-ctr","style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"3px"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group patterns-agency-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-secondary-background-color has-background" style="border-radius:3px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-puzzle-blue.png" style="width:40px"/></figure>
    <!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
<h5 class="wp-block-heading" style="margin-bottom:5px"><?php esc_html_e( 'Digital Advertising', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis,', 'patterns-agency' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
