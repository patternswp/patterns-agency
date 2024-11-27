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
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"120px"},"padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:80px;padding-bottom:80px"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:20px"><!-- wp:image {"id":48,"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-icon-white.png" alt="" class="wp-image-48" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.2"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Lorem Ipsum is simply i dumiomy is text Lorem Ipsum is simply', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"pa-contact-info","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pa-contact-info"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="at-svg at-h at-w patterns-agency-svg-icon" viewBox="0 0 16 16">
	<path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
	<path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
</svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|quaternary"}}}}},"textColor":"default"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-agency' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pa-contact-info","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group pa-contact-info"><!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="at-svg at-h at-w patterns-agency-svg-icon" viewBox="0 0 16 16">
	<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
<!-- /wp:html -->

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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}},"color":{"background":"#0000005c"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#0000005c;padding-top:20px;padding-bottom:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.5px","fontSize":"14px","textTransform":"none"},"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Policy', 'patterns-agency' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'patterns-agency' ); ?>","url":"#"} /-->

<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"patterns-agency/copyright"} /-->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}},"textColor":"default"} -->
<p class="has-default-color has-text-color" style="font-size:14px"> <?php esc_html_e( 'All Rights Reserved', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-agency/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->
