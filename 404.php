<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hoangvvo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="page-header" style="height:100vh;">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hoangvvo' ); ?></h1>
					<p>Perhaps, try a search?</p>
					<?php get_search_form(); ?>
					<p>Or, <a href="<?php echo esc_url( home_url( '/' ) ); ?>">go back to homepage</a>.</p>
				</div><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
