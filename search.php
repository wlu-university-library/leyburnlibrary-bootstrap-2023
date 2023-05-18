<?php
/**
 * The template for displaying search results.
 * 
 * @package bootstrap-basic
 */

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
			
			<?php if ($sbl) { ?>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'sidebar-left' ); ?>
					<?php the_widget( 'WP_Widget_Archives' ); ?> 
				</div>
				<?php if ($sbr) { ?>
					<div class="col-md-7 pad-for-sbl pad-for-sbr"> <!-- open main div (with two sidebars) -->
				<?php } else { ?>
					<div class="col-md-9 pad-for-sbl"> <!-- open main div (with left sidebar) -->
				<?php } ?>
			<?php } elseif ($sbr) { ?>
				<div class="col-md-10 pad-for-sbl"> <!-- open main div (with right sidebar) -->
			<?php } ?>							

						<?php if (have_posts()) { ?> 
						<header class="page-header">
							<h1 class="page-title"><?php printf(__('Search Results for: %s', 'bootstrap-basic'), '<span>' . get_search_query() . '</span>'); ?></h1>
						</header><!-- .page-header -->
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', 'search');
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'search'); ?>
						<?php } // endif; ?> 

						<?php pods_content(); ?>
			<?php if ($sbl || $sbr) : ?>
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