<?php
/**
 * Title: Single Right Sidebar
 * Slug: patterns-agency/single-post-right-sidebar
 * Template Types: single
 * Description: A layout template for displaying a post with a right sidebar.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
<!-- wp:template-part {"slug":"single-header", "align":"full"} /-->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
	<!-- wp:pattern {"slug":"patterns-agency/hidden-single-post-content"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"primary-sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->