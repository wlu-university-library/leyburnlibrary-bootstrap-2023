<?php
/**
 * Template for dispalying single post (read full post page).
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
			
			<?php
			 	if ($sbl) { 
					echo '<div class="col-md-3">';
					dynamic_sidebar( 'sidebar-left' );
					echo '</div>';
					if ($sbr) {
						echo '<div class="col-md-6 pad-for-sbl pad-for-sbr">';
					} 
				} elseif ($sbr) {
					echo '<div class="col-md-9 pad-for-sbr">';
				}
			?>
			
			<?php pods_content(); ?>
			<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', get_post_format());

							echo "\n\n";
							
							bootstrapBasicPagination();

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 

			<?php if ($sbl || $sbr) : ?>
				</div>
			<?php endif; ?>


			<?php if ($sbr) : ?>
				<div class="col-md-3 sbr">
					<?php dynamic_sidebar( 'sidebar-right' ); ?>
				</div>
			<?php endif; ?> 
		</main>
	</div>
</div>
<?php get_footer(); ?>