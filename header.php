<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoangvvo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
	<link rel='stylesheet' href='https://necolas.github.io/normalize.css/8.0.1/normalize.css' type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="logo" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>" />
		</a><!-- .site-branding -->
		<nav class="site-navigation" class="main-navigation">
			<?php

			$menuParameters = array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'      => false,
  				'echo'           => false,
				'items_wrap'     => '%3$s',
				'depth'			 => 0
			  );
			echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
