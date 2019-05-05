<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="home">
				<section class="home-section home-header">
					<img src="<?php echo get_theme_mod( 'image-home-header-bg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="home-header-bg">
					<div class="container">
						<div class="row">
							<div class="col-sm-8 mt-1 home-header-content">
								<h1><?php bloginfo('description'); ?></h1>
							</div>
						</div>
					</div>
				</section>
				<section class="home-section home-glance content-height">
					<div class="container">
						<h3 class="home-section-title">At a glance</h3>
						<div class="row home-glance-number">
							<div class="col">		
								<b>20+</b><span>Honors & Awards</span>
							</div>
							<div class="col">		
								<b>100+</b><span>Volunteer hours</span>
							</div>
							<div class="col">		
								<b>5+</b><span>Projects</span>
							</div>
							<div class="col">		
								<b>15+</b><span>Skills</span>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*
get_sidebar();
*/
get_footer();
