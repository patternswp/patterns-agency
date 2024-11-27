<?php
/**
 * Title: Archives
 * Slug: patterns-agency/archives
 * Categories: posts
 * Description: Display a date-based archive of posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px">

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"30px"}},"typography":{"fontSize":"1.5rem"}}} -->
<h4 class="wp-block-heading" style="margin-bottom:30px;font-size:1.5rem"><?php esc_html_e( 'Archives', 'patterns-agency' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:archives {"showPostCounts":true} /--></div>
<!-- /wp:group -->
