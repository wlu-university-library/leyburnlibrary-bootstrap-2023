<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('-', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
		<?php wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri()); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		
		
		
		
		<div class="container-fluid page-container">
			<?php do_action('before'); ?>
			
			<header role="banner">
				<div class="row site-branding wlu-header">
					<div class="sr-only">
						<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
					</div>
				</div>
				
				<div id="univ-nav-container" class="row">
					<?php wp_nav_menu(array('theme_location' => 'univnav', 'container' => false, 'menu_class' => 'col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 nav', 'fallback_cb' => '')); ?>
				</div>
				<div id="univ-wordmark" class="row">
					<?php if (is_front_page()) { ?>
						<div class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 site-title site-title-fp">
					<?php } else { ?>
						<div class="col-xs-8 col-md-6 col-lg-5 col-md-offset-2 col-lg-offset-2 site-title">
					<?php } ?>
						<a href="/"><span class='wm-wandl'>Washington <small>and</small> Lee</span> <span class='wm-ul'>University Library</span></a>
					</div>
					
					<?php if (!is_front_page()) { ?>
						<div class="col-xs-6 col-md-2 col-lg-3 page-header-top-right">
							<?php the_widget( 'WLU_Summon_Widget' ); ?>
						</div>
					<?php } ?>
					<?php dynamic_sidebar('header-right'); ?> 
				</div>
				
				<div id="footer-menu" class="row">
					<ul id="responsive-footer-menu" class="col-xs-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 nav responsive-footer-menu">
						<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/">Library Home</a></li> -->
						<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children" data-dropdown="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Research <span class="caret"></span></a>
							<?php wp_nav_menu ( array ('menu' => 'Research Menu',
													   'container' => false,
													   'menu_class' => 'sub-menu dropdown-menu',
													   'menu_id' => '',
													   'fallback_cb' => '' )
											  ); 
							?>
						</li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children" data-dropdown="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
							<?php wp_nav_menu ( array ('menu' => 'Services Menu',
													   'container' => false,
													   'menu_class' => 'sub-menu dropdown-menu',
													   'menu_id' => '',
													   'fallback_cb' => '' )
											  ); 
							?>
						</li>
						<?php wp_nav_menu ( array ('menu' => 'Main Navigation Menu', 
												   'container' => false, 
												   'menu_class' => '',
												   'menu_id' => '',
												   'fallback_cb' => '',
												   'items_wrap' => '%3$s' )
										  ); 
						?>
					</ul>
				</div>
			</header>
			
			
			<div id="content" class="site-content">