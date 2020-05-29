<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thaonguyen
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
else
{
?>
		<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
	   
	   <?php dynamic_sidebar( 'sidebar' ); ?>
	   
		</aside>
<?php   
}
?>

<!-- <aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside> -->
<!-- #secondary -->
