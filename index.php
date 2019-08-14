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
					<div class="container">
						<div class="row">
							<div class="home-header-content col-sm-8 mx-auto mt-5">		
								<h1>I am a <span>software developer</span>, a <span>leader</span>, a <span>social marketer</span>, an <span>enthusiastic photographer</span>, and a <span>good friend</span>.</h1>
							</div>
						</div>
					</div>
				</section>
				<?php
				/*
					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;
					/* Start the Loop
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					the_posts_navigation();
					*/
				?>
				
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*
get_sidebar();
*/
get_footer();
