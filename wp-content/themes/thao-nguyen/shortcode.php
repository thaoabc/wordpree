<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thaonguyen
 */

get_header();
?>
<div class="content">
<section id="main-content">
	<!-- <main id="primary" class="site-main"> -->
	<?php
		
		
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			get_template_part( 'template-parts/content', 'page' );
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			endwhile;
			//thaonguyen_pagination();
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</section>
	<section id="sidebar">
		<?php 
get_sidebar();
?>
	</section>
	<!-- </main> -->
	</div>
<?php
get_footer();
