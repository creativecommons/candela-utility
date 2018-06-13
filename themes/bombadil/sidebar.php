<?php
/**
 * The sidebar containing the main widget area
 *
 * From pressbooks-aldine
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-primary' ); ?>
</aside><!-- #secondary -->
