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

	<footer id="footer" class="site-footer">
		<!-- <footer id="colophon"> -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'thao-nguyen' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'thao-nguyen' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'thao-nguyen' ), 'thao-nguyen', '<a href="http://underscores.me/">thao nguyen</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<?php
    // echo '<pre>';
    // print_r ($post->post_content);
    // echo '</pre>';
?>
