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
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-transparent p-5">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img height="30" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>" />
			</a><!-- .site-branding -->
			<div class="collapse navbar-collapse" id="navbarHeader">
				<ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
				<?php
				$menuParameters = array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'echo'           => false,
					'items_wrap'     => '%3$s',
					'depth'			 => 0
				);
				echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
				?>
				</ul>
			</div><!-- #site-navigation -->
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
