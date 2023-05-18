<?php
/**
 * Template Name: Portal-style Page
 * 
 * @package bootstrap-basic
 */

$sbl = is_active_sidebar( 'sidebar-left' );
$sbr = is_active_sidebar( 'sidebar-right' );

get_header();
?> 
	<div class="content-area portal-page" id="wlu-main-column-static">
		<main id="main" class="site-main" role="main">
			<div id="wlu-breadcrumbs" class="row">
				<div class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2" >
					<?php 
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						} 
					?>
				</div>
			</div>

			<?php 
			while (have_posts()) {
				the_post();

				get_template_part('content', 'page');

			} //endwhile;
			?> 
			<?php pods_content(); ?>
		</main>
	</div>
<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-circle-up"></i></a>
<?php get_footer(); ?>
