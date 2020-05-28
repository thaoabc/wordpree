<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thaonguyen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'thao-nguyen' ); ?></a>
<div id="container">
	<header id="header">
		<!-- <header id="masthead"> -->
		<div class="logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<div class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
			else :
				?>
				<div class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
			endif;
			$thao_nguyen_description = get_bloginfo( 'description', 'display' );
			if ( $thao_nguyen_description || is_customize_preview() ) :
				?>
				<div class="site-description"><?php echo $thao_nguyen_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thao-nguyen' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
					'container'      => 'nav',
					'container_class'=> 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
