<?php
/**
 * The template for displaying Honor Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hoangvvo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-header mb-5">
                    <div class="entry-head">
                        <h1 class="entry-title">Honors & Awards</h1>
                    </div>
                    <?php 
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full',array('class' => 'entry-featureImage '));
                    }
                    ?>
                </div><!-- .entry-header -->
                <div class="container">
                    <p class="animateView">Those who know me know that I am such a competitive person. I love to compete and achieve great awards. In fact, I have been doing it for years!</p>
                    <p class="animateView">For more detail, check out my <a href="https://www.linkedin.com/in/hoangvvo/">LinkedIn</a> page.</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                    <?php
                        $args = array( 'post_type' => 'hoangvvo_honor', 'posts_per_page' => 100 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 square-item animateView">
                            <div class="square-item-wrapper">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('full',array('class' => 'square-item-featureImage'));
                                }
                                else echo '<img src="'.get_theme_mod( 'image-placeholder-honor' ).'" class="square-item-featureImage"/>'
                                ?>
                                <span class="square-item-date"><?php the_date('M Y'); ?></span>
                                <div class="square-item-meta">
                                    <?php the_title( '<h3>', '</h3>',true );?>
                                    <p><?php the_content();?></p>
                                </div>
                            </div>
                        </div>                          
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
