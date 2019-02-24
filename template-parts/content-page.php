<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-header">
		<div class="entry-head">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php
			if ( 'post' === get_post_type() ) :
			?>
			<?php endif; ?>
		</div>
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('full',array('class' => 'entry-featureImage '));
		}
		?>
	</div><!-- .entry-header -->
	<div class="container">
		<div class="row">
			<div class="entry-content col-md-8 mx-auto">
					<?php
					the_content()
					?>
				</div>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #page-<?php the_ID(); ?> -->
