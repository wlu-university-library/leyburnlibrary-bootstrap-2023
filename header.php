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
		<meta name="google-site-verification" content="wY-LUETw2oBWRAQ_-RWQvnI0QIZbJK9SPTt33rRDL0c" />
		<meta name="google-site-verification" content="UdQQb6bzEoCWSPa_996x9Orb1py4NbJNrZX0Lfhk0ds" />
		<title><?php wp_title('-', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">
		<script src="//use.typekit.net/esh0gxj.js"></script>
		<script>try{Typekit.load({async: true});}catch(e){}</script>
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Overpass:400,400i,700,700i|Crimson+Text:400,700" rel="stylesheet">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
		<?php wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri()); ?>
	</head>
	<body <?php body_class(); ?> data-spy="scroll" data-target=".scrollnav">
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
					<?php wp_nav_menu(array('theme_location' => 'univnav', 'container' => false, 'menu_class' => 'col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2 nav', 'fallback_cb' => '')); ?>
				</div>
				<div id="univ-wordmark" class="row">
					<?php if (is_front_page() && is_main_site()) { ?>
						<div class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2 site-title-fp">
					<?php } else { ?>
						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-5 col-md-offset-1 col-lg-offset-1 col-xl-offset-2 site-title">
					<?php } ?>
							<a href="https://library.wlu.edu"><span class='wm-wandl'>Washington <small>and</small> Lee</span> <span class='wm-ul'>University Library</span></a>
						</div>
					
					<?php if (!(is_front_page() && is_main_site())) { ?>
						<div class="col-xs-12 col-md-4 col-lg-4 col-xs-offset-0 col-md-offset-0 page-header-top-right">
							<div class="col-xs-12"><?php the_widget( 'WLU_Primo_Widget_Top' ); ?></div>
							<div class="primo-header">
								<a href="https://wlu.primo.exlibrisgroup.com/discovery/search?vid=01WLU_INST:01WLU&sortby=rank&mode=advanced&lang=en">Advanced Search</a>
								<a href="https://wlu.primo.exlibrisgroup.com/discovery/login?vid=01WLU_INST:01WLU&lang=en">My Library Account</a>
							</div>
						</div>
					<?php } ?>
					<?php dynamic_sidebar('header-right'); ?> 
				</div>
				
				<div id="header-menu" class="row">
					<?php 
					  wp_nav_menu ( 
						array (
							   'theme_location' => 'primary',
							   'container' => false, 
							   'menu_class' => 'col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2 nav responsive-header-menu',
							   'menu_id' => 'responsive-header-menu',
							   'fallback_cb' => '',
							   'walker' => new BootstrapBasicMyWalkerNavMenu() )
							  ); 
					?>
				</div>
				<div id="header-menu-mobile-container" class="row">
					<div class='col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2'>
						<div class="mobile-menu-drop"><span class='mobile-menu-link'>Navigation Menu</span><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><button class="fa fa-bars"></button></a></div>
				    <?php
				      wp_nav_menu (
				 		array(
						  'theme_location'	=> 'mobile',
				          'container'       => 'div',
				          'container_class' => 'nav-collapse collapse clearfix',
				          'container_id'    => 'header-menu-mobile',
				          'menu_class'      => 'nav',
				          'fallback_cb'     => 'wp_page_menu',
				          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				      )
					);
				  ?>
				</div>
				</div>
			</header>
			
			
			<div id="content" class="site-content">
