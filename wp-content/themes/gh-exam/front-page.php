<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

get_header(); ?>


<?php if ( is_home() ) : ?>
    <div class="banner-wrapper">
        <div class="image-section">

            <img src="><?php echo get_template_directory_url(); ?>/banner.png">
        </div>
        <h2>Blog posts</h2>

    </div>

<?php endif; ?>

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <div class="row">

                                <?php
                                if ( have_posts() ) :
                                    while ( have_posts() ) : the_post();

                                        get_template_part( 'template-parts/content', get_post_format() );

                                    endwhile; ?>

                                    <div class="blog-pagination col-12">
                                        <?php the_posts_pagination( array(
                                            'prev_text'     => __( 'Previous page' ),
                                            'next_text'     => __( 'Next page' ),
                                            'prev_next'     => false
                                        ) ); ?>
                                    </div>

                                <?php else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif; ?>

                            </div>

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- columns -->

                <div class="col-md-12 col-lg-4">

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <?php get_sidebar(); ?>
    </div>

<?php
get_footer();
get_footer();
