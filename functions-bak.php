<?php
/**
 * Leyburn Library - Bootstrap theme
 * 
 * @package leyburnlibrary-bootstrap
 */

//include_once 'wp-bootstrap-navwalker.php';

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
function add_async_attribute($tag, $handle) {
    switch ( $handle ) {
        case 'typeahead':
        case 'announcer-js':
        case '__ytprefsfitvids__':
        case '__ytprefs__':
        case 'wp-pointer':
		case 'jqueryhoverintent':
		case 'jquerycookie':
		case 'dcjqaccordion':
		case 'wluaal':
		case 'wlulh':
		case 'ai-js':
		case 'child-pages-shortcode':
    	    return str_replace( ' src', ' async="async" src', $tag );
        default:
            return $tag;
    }
}

set_post_thumbnail_size( 64, 64, true );

register_nav_menus(array(
	'primary' => __('Primary Menu', 'bootstrap-basic'),
	'univnav' => __('University Navigation'),
	'mobile'  => __('Navigation Mobile'),
));

add_action('wp_print_styles', 'reviewtabstyle');
function reviewtabstyle() {
    wp_enqueue_style ( 'tabs-css', get_stylesheet_directory_uri() . '/tabs.css');
    wp_enqueue_style ( 'bootstrap-xl-css', get_stylesheet_directory_uri() . '/bootstrap-xl.css');
}

add_action('wp_enqueue_scripts', 'add_local_js');
function add_local_js() {
//	wp_enqueue_script ( 'iframeresizer', content_url ( 'common-libs' ) . '/iframeResizer.min.js' );
	wp_enqueue_script ( 'typeahead', content_url ( 'common-libs' ) . '/typeahead.bundle.js' );
}

include_once(ABSPATH.WPINC.'/rss.php');

function readRss($atts) {
    extract( 
		shortcode_atts( array(
			"feed" => '',
			"num" => '25'
    	), $atts )
	);

    return wp_rss($feed, $num);
}

add_shortcode('rss', 'readRss');

add_action( 'init', function () { 
    global $allowedposttags;

    $allowedposttags['iframe'] = array(
        'src'    => array(),
        'height' => array(),
        'width'  => array(),
    );

	$allowedposttags['script'] = array(
		'src'	=> array(),
		'type'	=> array(),
		'lang'	=> array()
	);
});

add_filter('tiny_mce_before_init', function( $a ) {
    $a["extended_valid_elements"] = array('iframe[src|height|width]', 'script[type|lang|src]');
    return $a;
});

// Removes "Protected" from passworded pages
function protect_my_privates($text){
  $text='%s';
  return $text;
}
add_filter('private_title_format','protect_my_privates');
add_filter('protected_title_format', 'protect_my_privates');

function mawaha_filter_allowed_html($allowed, $context){
 
	if (is_array($context))
	{
	    return $allowed;
	}
 
	if ($context === 'post')
	{
            // Example case
	    $allowed['button']['data-target'] = true;
	    $allowed['button']['data-toggle'] = true;
	    $allowed['button']['data-parent'] = true;
	    $allowed['button']['aria-expanded'] = true;
	    $allowed['button']['aria-controls'] = true;
	}
 
	return $allowed;
}
add_filter('wp_kses_allowed_html', 'mawaha_filter_allowed_html', 10, 2);

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
