<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-index">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<h1 class="page-title"><?php single_term_title(); ?></h1>
				<?php
				the_archive_description( '<p class="archive-description">', '</p>' );
				?>
			</div><!-- .page-header -->

			<div class="page-index container">
				<div class="row">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'index' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
