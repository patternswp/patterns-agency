<?php
/**
 * Title: Archive with Left Sidebar
 * Slug: patterns-agency/list-archive-left-sidebar
 * Template Types: archive, home, search, category, tag, author, date
 * Description: Layout template for displaying a archives with a left sidebar.
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"list-archive-header", "align":"full"} /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"},"blockGap":{"left":"80px"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:80px;padding-bottom:80px">

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:template-part {"slug":"primary-sidebar"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">

			<!-- wp:pattern {"slug":"patterns-agency/query-list"} /-->

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
