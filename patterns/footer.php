<?php
/**
 * Title: Footer
 * Slug: patterns-agency/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png"  style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.2"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Lorem Ipsum is simply i dumiomy is text Lorem Ipsum is simply', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"pa-contact-info","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pa-contact-info"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-envelope-at-blue.png"  style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}}},"textColor":"default"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-agency' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pa-contact-info","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pa-contact-info"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-telephone-blue.png"  style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}}},"textColor":"default"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-agency' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Services', 'patterns-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.5px","fontSize":"14px","textTransform":"none"},"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'patterns-agency' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Useful Links', 'patterns-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.5px","fontSize":"14px","textTransform":"none"},"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'patterns-agency' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->


<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Recent News', 'patterns-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}},"typography":{"fontSize":"14px"}}} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#0000005c"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:#0000005c;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.5px","fontSize":"14px","textTransform":"none"},"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Policy', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'patterns-agency' ); ?>","url":"#"} /-->

<!-- /wp:navigation -->
<!-- wp:pattern {"slug":"patterns-agency/copyright"} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-agency/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->
