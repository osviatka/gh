<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>
<div class="col-md-12 col-lg-6">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">


			<?php if ( has_post_thumbnail() ) { :
				the_post_thumbnail( 'post_thumbnail' );
			}else {?>
				<img src="><?php echo get_template_directory_url(); ?>/image-here.png">
			<?php } ?>

			<div class="entry-post-content">
				<h2><a href="<?php echo get_permalink(); ?>" ><?php the_title ?></a></h2>

				</div>
			

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php gh_exam_posted_on(); ?>
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'gh-exam' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gh-exam' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php gh_exam_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
