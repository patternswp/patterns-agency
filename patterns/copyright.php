<?php
/**
 * Title: Copyright
 * Slug: patterns-agency/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Agency
 * @subpackage Patterns_Agency/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"patterns-agency/copyright","args":{"key":"copyright"}}}},"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-agency' ); ?>","textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-x-small-font-size"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-x-small-font-size"> <?php esc_html_e( 'All Rights Reserved', 'patterns-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
