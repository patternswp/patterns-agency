<?php
/**
 * Title: Primary Header
 * Slug: patterns-agency/hidden-primary-header
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"className":"patterns-agency-header ","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group patterns-agency-header"><!-- wp:group {"align":"full","className":"patterns-agency-header\u002d\u002dtop","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull patterns-agency-header--top has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-telephone-white.png" style="width:16px"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|default"}}}}} -->
                    <p class="pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-agency' ); ?></a></p>
                    <!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-envelope-at-white.png" style="width:16px"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|default"}}}}} -->
                    <p class="pwp-txt-dec-non has-link-color"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-agency' ); ?></a></p>
                    <!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-geo-alt-white.png" style="width:16px"/></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
                    <p class="has-default-color has-text-color has-link-color"><?php esc_html_e( '6391 Elgin St. Celina, 10299', 'patterns-agency' ); ?></p>
                    <!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->


            <!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-small-icon-size","align":"center","className":"is-style-logos-only"} -->
            <ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
            <!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

    <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

            <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:pattern {"slug":"patterns-agency/site-identity"} /-->

                <!-- wp:pattern {"slug":"patterns-agency/navigation-menu"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"patterns-agency-phn-info","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group patterns-agency-phn-info">
                <!-- wp:group {"className":"at-h at-w patterns-agency-is-h-w-60","style":{"border":{"radius":"50px"}},"backgroundColor":"quaternary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
                <div class="wp-block-group at-h at-w patterns-agency-is-h-w-60 has-quaternary-background-color has-background"
                    style="border-radius:50px"><!-- wp:image {"width":"30px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-telephone-white.png" style="width:30px"/></figure>
                        <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:paragraph {"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Need help?', 'patterns-agency' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"textColor":"base","fontSize":"medium"} -->
                    <p class="has-base-color has-text-color has-medium-font-size"><?php esc_html_e( '(808) 555-0111', 'patterns-agency' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->



</div>
<!-- /wp:group -->
