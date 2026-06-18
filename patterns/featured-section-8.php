<?php
/**
 * Title: Featured Section 8
 * Slug: patterns-agency/featured-section-8
 * Categories: contact, call-to-action, featured
 * Description:  A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"quaternary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="margin-bottom:0px;font-size:18px"><?php esc_html_e( 'Talk to us', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Feel free to write', 'patterns-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-agency' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"quaternary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color" style="margin-bottom:0px;font-size:18px"><?php esc_html_e( 'Need any Help ?', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Get in touch with us', 'patterns-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"3px"}},"backgroundColor":"base","className":"pw-has-w-h at-h at-w  at-flx at-al-itm-ctr at-jfy-cont-ctr","layout":{"type":"default"}} -->
<div class="wp-block-group patterns-agency-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-base-background-color has-background" style="border-radius:3px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-telephone-white.png" style="width:40px"/></figure>
					<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
<h5 class="wp-block-heading" style="margin-bottom:5px"><?php esc_html_e( 'Have any question?', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Free +92 (020)-9850', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"3px"}},"backgroundColor":"base","className":"patterns-agency-svg-icon patterns-agency-is-h-w-40 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr","layout":{"type":"default"}} -->
<div class="wp-block-group patterns-agency-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-base-background-color has-background" style="border-radius:3px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-envelope-at-white.png" style="width:40px"/></figure>
					<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
<h5 class="wp-block-heading" style="margin-bottom:5px"><?php esc_html_e( 'Write email', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'example@company.com', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":""},"border":{"radius":"3px"}},"backgroundColor":"base","className":"patterns-agency-svg-icon patterns-agency-is-h-w-40at-h at-w  at-flx at-al-itm-ctr at-jfy-cont-ctr","layout":{"type":"default"}} -->
<div class="wp-block-group patterns-agency-is-h-w-80 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-base-background-color has-background" style="border-radius:3px"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-map-white.png" style="width:40px"/></figure>
					<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
<h5 class="wp-block-heading" style="margin-bottom:5px"><?php esc_html_e( 'Visit anytime', 'patterns-agency' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum is simply free text available dolor sit amet', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
