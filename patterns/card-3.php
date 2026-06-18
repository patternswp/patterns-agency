<?php
/**
 * Title: Card 3
 * Slug: patterns-agency/card-3
 * Categories: featured
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px","style":"solid","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":"300px"}},"borderColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-style:solid;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"width":"80px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-award-white.png" style="width:80px"/></figure>
    <!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"bottom":"0px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"quaternary","fontSize":"x-large"} -->
<h5 class="wp-block-heading has-text-align-center has-quaternary-color has-text-color has-x-large-font-size" style="margin-top:15px;margin-bottom:0px;font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( '20+', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"default"} -->
<p class="has-text-align-center has-default-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Winning Award 3', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
