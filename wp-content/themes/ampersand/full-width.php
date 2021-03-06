<?php
/**
 * Template Name: Full Width
 *
 * Full width page template.
 *
 * @package Ampersand
 * @since Ampersand 1.0
 */

get_header(); ?>

<!-- Script for resizing iframe, only applicable to the dev playground page -->
<script>
jQuery(document).ready(function ($) {
    $('#appsIframe').iFrameResize({checkOrigin: false});
});
</script>

		<div id="main" class="site-main clearfix">
			<div id="primary" class="content-area">
				<div id="content" class="site-content container clearfix" role="main">

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="post-content">
							<?php if ( '' != get_the_post_thumbnail() ) { ?>
								<a class="post-featured-image" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ampersand' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_post_thumbnail( 'post-image' ); ?></a>
							<?php } ?>

							<div class="post-text">
								<?php the_content(); ?>
								<?php wp_link_pages(); ?>
								<?php edit_post_link( __( 'Edit', 'ampersand' ), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .post-text -->
						</div><!-- .post-content -->

						<!-- If comments are open or we have at least one comment, load up the comment template. -->
						<?php if ( comments_open() || '0' != get_comments_number() ) { ?>
							<div class="comments-section clearfix">
								<?php comments_template(); ?>
							</div><!-- comment section -->
						<?php } ?>
					<?php endwhile; // end of the loop. ?>

				</div><!-- #content .site-content -->
			</div><!-- #primary .content-area -->
		</div><!-- #main .site-main -->

<?php get_footer(); ?>
