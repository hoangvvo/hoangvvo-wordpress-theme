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
				<section class="home-section home-project content-height">
					<div class="container">
						<div class="row">
							<div class="">		
								<h2>Projects</h2> 
								<h3>I have created some great projects over the past years.</h3>
							</div>
						</div>
						<div class="row">
							<?php
							$args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'category_name' => 'project',
								'posts_per_page' => 4,
							);
							$project_query = new WP_Query($args);
							if ( $project_query->have_posts() ) :
								while ( $project_query->have_posts() ) : 
								$project_query->the_post();
								get_template_part( 'template-parts/content', 'index' );
								endwhile;
							endif;
							wp_reset_postdata();
							?>
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
