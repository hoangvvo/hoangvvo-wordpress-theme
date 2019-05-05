<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hoangvvo
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-info container">
			<div class="row d-none">
				<div class="col-4">
					<h2><?php bloginfo( 'name' ); ?></h2>
					<div class="footer-social-link">
						<a href="<?php echo get_theme_mod( 'linkedin-link' ); ?>" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
						<a href="<?php echo get_theme_mod( 'instagram-link' ); ?>" class="nav-link"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
			<p class="copyright-text"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s. ', 'hoangvvo' ), 'Wordpress' );
				?>
			<?php printf( esc_html__( 'Designed and coded with ❤ by %2$s.', 'hoangvvo' ), 'hoangvvo', '<a href="https://www.hoangvvo.com">Hoang Vo</a>' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Google Analytics -->
<script>
</script>
<!-- End Google Analytics -->

</body>
</html>
