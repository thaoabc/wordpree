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
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'thaonguyen' ); ?></a>

	<!-- <header id="masthead" class="site-header"> -->
	<header id="header">
		<!-- <div class="site-branding"> -->
		<div class="logo">
		<div class="site-name">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$thaonguyen_description = get_bloginfo( 'description', 'display' );
		?>
			</div>
		<?php
			if ( $thaonguyen_description || is_customize_preview() ) :
				?>
				<div class="site-description"><?php echo $thaonguyen_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
			<?php endif; ?>
		</div>
		<!-- </div> -->
		<!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thaonguyen' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => 'nav',
					'container_class' => 'primary-menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
