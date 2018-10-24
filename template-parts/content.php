<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
	<p class="entry-category"><?php the_category(' ');?></p>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
			Posted on <?php the_time('l, F jS, Y') ?> by <?php the_author(); ?>.
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<div class="container">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hoangvvo' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			)
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hoangvvo' ),
			'after'  => '</div>',
		) );
		?>
		</div>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<div class="container">
		<?php hoangvvo_entry_footer(); ?>
		</div>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
