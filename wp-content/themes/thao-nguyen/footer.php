<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thaonguyen
 */

?>

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info"> -->
		<footer id="footer">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thaonguyen' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-nav',
					// 'menu_id'        => 'primary-menu',
					'container' => 'nav',
					'container_class' => 'primary-menu',
					'menu_class' => 'menu clearfix',
					'items_wrap'      => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>',
				)
			);
			?>
		</nav>
                <div class="copyright">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'thaonguyen' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'thaonguyen' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'thaonguyen' ), 'thaonguyen', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!-- </div> -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
