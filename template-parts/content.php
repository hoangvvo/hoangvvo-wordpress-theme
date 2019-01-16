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
	<div class="entry-header mb-5">
		<div class="entry-head">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php
				if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<span class="meta-item">
						<svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
						<?php the_author(); ?>
					</span>
					<span class="meta-item">
						<svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"></path></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"></use></clipPath><path clip-path="url(#b)" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z"></path></svg>
						<?php the_time('l, F jS, Y') ?>
					</span class="meta-item">
					<span class="meta-item">
						<svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
						<?php the_category(' ');?>
					</span class="meta-item">
					<span class="meta-item float-right">
						<svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
						<a href="#respond"><?php echo get_comments_number(); ?> comment(s)</a>
					</span>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
		</div>
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full',array('class' => 'entry-featureImage '));
		}
		?>
	</div><!-- .entry-header -->
	<div class="container">
		<div class="row">
			<div class="entry-content col-md-8">
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
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
