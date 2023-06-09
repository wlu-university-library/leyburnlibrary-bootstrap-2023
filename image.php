<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

$sbl = is_active_sidebar( 'sidebar-left' );
$sbr = is_active_sidebar( 'sidebar-right' );

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<div id="wlu-content" class="row">
	<div class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2 content-area subpages" id="wlu-main-column">
		<main id="main" class="site-main" role="main">
			<?php 
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} 
			?>
			
			<?php if ($sbl) : ?>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'sidebar-left' ); ?>
				</div>
				<?php if ($sbr) { ?>
					<div class="col-md-7">
				<?php } else { ?>
					<div class="col-md-9">
				<?php } ?>
			<?php endif; ?>
			
			<?php pods_content(); ?>
						<?php 
						while (have_posts()) {
							the_post(); 
						?> 

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php the_title('<h1 class="entry-title">', '</h1>'); ?> 

								<div class="entry-meta">
									<?php
										$metadata = wp_get_attachment_metadata();
										printf(__('Published <span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%8$s</a>', 'bootstrap-baisc'),
											esc_attr(get_the_date('c')),
											esc_html(get_the_date()),
											esc_url(wp_get_attachment_url()),
											$metadata['width'],
											$metadata['height'],
											esc_url(get_permalink($post->post_parent)),
											esc_attr(strip_tags(get_the_title($post->post_parent))),
											get_the_title($post->post_parent)
										);

										echo ' ';
										bootstrapBasicEditPostLink();
										//edit_post_link(__('Edit', 'bootstrap-baisc'), '<span class="edit-link">', '</span>');
									?> 
								</div><!-- .entry-meta -->

								<ul role="navigation" id="image-navigation" class="image-navigation pager">
									<li class="nav-previous previous"><?php previous_image_link(false, __('<span class="meta-nav">&larr;</span> Previous', 'bootstrap-baisc')); ?></li>
									<li class="nav-next next"><?php next_image_link(false, __('Next <span class="meta-nav">&rarr;</span>', 'bootstrap-baisc')); ?></li>
								</ul><!-- #image-navigation -->
							</header><!-- .entry-header -->

							<div class="entry-content">
								<div class="entry-attachment">
									<div class="attachment">
										<?php bootstrapBasicTheAttachedImage(); ?> 
									</div><!-- .attachment -->

									<?php if (has_excerpt()) { ?> 
									<div class="entry-caption">
										<?php the_excerpt(); ?> 
									</div><!-- .entry-caption -->
									<?php } //endif; ?> 
								</div><!-- .entry-attachment -->

								<?php
								the_content();
								
								/**
								 * This wp_link_pages option adapt to use bootstrap pagination style.
								 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
								 * 
								 * NOPE! NO! DON'T! This function really does not works with WordPress image attachment page.
								 * @todo Check again that WordPress already fix pages in image.php bug and re-enable it. (Last WP version checked but still not work is 3.7.1)
								*/
								/* wp_link_pages(array(
									   'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
									   'after'  => '</ul></div>',
									   'separator' => ''
								));*/
								?> 
							</div><!-- .entry-content -->

							<?php bootstrapBasicEditPostLink(); ?> 
						</article><!-- #post-## -->

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}
						?> 

						<?php 
						} //endwhile; // end of the loop. 
						?> 

						<?php if ($sbl) : ?>
							</div>
						<?php endif; ?>

						<?php if ($sbr) : ?>
							<div class="col-md-2">
								<?php dynamic_sidebar( 'sidebar-right' ); ?>
							</div>
						<?php endif; ?> 
					</main>
				</div>
			</div>
			<?php get_footer(); ?>