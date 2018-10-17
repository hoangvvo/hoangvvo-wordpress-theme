<?php
/**
 * Template part for displaying results in search pages, archieve pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

?>
<div class="col-12 col-md-6 col-lg-4">
	<article id="post-<?php the_ID(); ?>" class="type-index">
		<div class="entry-image">
			<?php the_post_thumbnail( 'medium' ); ?>
		</div>
		<div class="entry-meta">
			<?php 
				the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
			?>
			<h3 class="entry-category"><?php the_category(' ');?></h3>
			<div class="entry-stat">
				<span>
					<svg style="height: .6rem;" name="eye" viewBox="0 0 30.5 16.5" width="100%" height="100%"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg>
					<?php echo getPostViews(get_the_ID()); ?>
				</span>
				<span>	
					<svg name="comment" viewBox="-405.9 238 56.3 54.8" width="100%" height="100%"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg>
					<?php comments_number( '0', '1', '%' ); ?>	
				</span>
			</div>	
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
