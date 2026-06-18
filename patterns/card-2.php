<?php
/**
 * Title: Card 2
 * Slug: patterns-agency/card-2
 * Categories: featured
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"patterns-agency-is-h-w-80 at-h at-w  at-flx at-al-itm-ctr at-jfy-cont-ctr","style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"3px"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group patterns-agency-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-secondary-background-color has-background" style="border-radius:3px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-megaphone-blue.png" style="width:40px"/></figure>
    <!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
<h5 class="wp-block-heading has-text-align-center" style="margin-bottom:5px"><?php esc_html_e( 'Digital Advertising', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
