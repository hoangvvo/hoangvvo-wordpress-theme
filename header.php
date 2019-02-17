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
		<nav class="navbar navbar-expand-lg navbar-dark pt-4">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img height="32" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>" />
					<span><a href=""></a></span>
				</a><!-- .site-branding -->
				<ul class="navbar-nav flex-row d-none d-md-flex">
					<li class="nav-item">
						<a href="<?php echo get_theme_mod( 'linkedin-link' ); ?>" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
					</li>
					<li class="nav-item">
						<a href="<?php echo get_theme_mod( 'instagram-link' ); ?>" class="nav-link"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
				<div class="collapse navbar-collapse" id="navbarHeader">
					<ul class="navbar-nav ml-md-auto ">
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
			</div>	
		</nav>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
