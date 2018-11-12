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
			<div class="row">
				<div class="col-12 text-center">
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Designed with ❤ by %2$s.', 'hoangvvo' ), 'hoangvvo', '<a href="https://www.hoangvvo.com">Hoang Vo</a>' );
					?>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

</body>
</html>
