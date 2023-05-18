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
				<div class="col-md-2">
					<?php dynamic_sidebar( 'sidebar-left' ); ?>
				</div>
				<?php if ($sbr) { ?>
					<div class="col-md-8">
				<?php } else { ?>
					<div class="col-md-10">
				<?php } ?>
			<?php endif; ?>
			
			<?php pods_content(); ?>
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'bootstrap-basic'); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bootstrap-basic'); ?></p>

								<!--search form-->
								<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
									<div class="form-group">
										<div class="col-xs-10">
											<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'bootstrap-basic'); ?>" title="<?php echo esc_attr_x('Search &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
										</div>
										<div class="col-xs-2">
											<button type="submit" class="btn btn-default"><?php _e('Search', 'bootstrap-basic'); ?></button>
										</div>
									</div>
								</form>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->
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