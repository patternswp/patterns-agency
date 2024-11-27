<?php
/**
 * Title: Hero Banner
 * Slug: patterns-agency/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" ,"id":109,"dimRatio":50,"minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-109" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg"  data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="margin-bottom:0px;font-style:normal;font-weight:500"><?php esc_html_e( 'Crafting Digital', 'patterns-agency' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"default","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-default-color has-text-color has-xx-large-font-size" style="margin-bottom:10px;font-style:normal;font-weight:700"><?php esc_html_e( 'Amplify Your Digital Presence', 'patterns-agency' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"25px"}}},"textColor":"default"} -->
<p class="has-default-color has-text-color" style="margin-bottom:25px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Discover More', 'patterns-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
