<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

$sbl = is_active_sidebar( 'sidebar-left' );
$sbr = is_active_sidebar( 'sidebar-right' );

get_header();
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
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid" id="navfluid">
					    	<div class="navbar-header">
						    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
						       		<span class="sr-only">Toggle navigation</span>
						       		<span class="icon-bar"></span>
						       		<span class="icon-bar"></span>
						       		<span class="icon-bar"></span>
						      	</button>
								<a class="navbar-brand" href="#">Where would you like to go?</a>
							</div>
							<div class="collapse navbar-collapse" id="navigationbar">	
								<?php dynamic_sidebar( 'sidebar-left' ); ?>
								<?php the_widget( 'WP_Widget_Archives' ); ?> 
							</div>
						</div>
					</nav>
				</div>
				<?php if ($sbr) { ?>
					<div class="col-md-7 pad-for-sbr"> <!-- open main div (with two sidebars) -->
				<?php } else { ?>
					<div class="col-md-9 pad-for-sbr"> <!-- open main div (with left sidebar) -->
				<?php } ?>
			<?php } elseif ($sbr) { ?>
				<div class="col-md-9 pad-for-sbr"> <!-- open main div (with right sidebar) -->
			<?php } ?>							
			
			<?php 
			$published_posts = wp_count_posts()->publish;
			$post_num = 0;
			while (have_posts()) {
				$post_num++;
				the_post();

				get_template_part('content', 'page');

				if ($published_posts > $post_num) {
					echo "<div class='post-item-divider'></div>";
				}
				
				echo "\n\n";
		
				// If comments are open or we have at least one comment, load up the comment template
				if (comments_open() || '0' != get_comments_number()) {
					comments_template();
				}

				echo "\n\n";

			} //endwhile;
			?> 
			<?php pods_content(); ?>
			
			<?php if ($sbl || $sbr) { ?>
				</div> <!-- close main div (if any sidebar exists) -->
			<?php } ?>
			
			<?php if ($sbr) : ?>
				<div class="col-md-2">
					<?php dynamic_sidebar( 'sidebar-right' ); ?>
				</div>
			<?php endif; ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>