<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

?>

<article class="page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	the_content();
	?><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
