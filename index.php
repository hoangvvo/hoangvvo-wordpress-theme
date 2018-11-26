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
							<div class="col-sm-8 mx-auto mt-1 text-center home-header-content">		
								<h2>Meet Hoang Vo,</h2>
								<div class="profilepic-wrapper">
									<div class="profilepic">
										<img/>
									</div>
								</div>
								<h1>He is a <span>software developer</span>, a <span>leader</span>, a <span>social marketer</span>, an <span>enthusiastic photographer</span>, and a <span>good friend</span>.</h1>
								<div class="text-align">
									<a class="btn">My CV</a>
									<a href="/blog" class="btn">My Blog</a>
								</div>
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
