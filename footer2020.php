<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-univinfo" class="row">
					<div class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2">
						<div id="univ-footer-site-search" class="col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
							<span class="sr-only"><label for="wlu-library-site-search">Library Website Search Input Box</label></span>
							<?php //the_widget("GSC_Widget"); ?>
							<?php the_widget("WGS_Widget"); ?>
							<!-- <?php the_widget("BootstrapBasicSearchWidget", "navbaralign=navbar-right"); ?> -->
							<!-- <?php do_shortcode('[multisite_search_form type="horizontal" page="search-results"]'); ?> -->
						</div>
						<div class="col-xs-12">
							<div id="wlu-social-links" class="col-xs-12 col-sm-2">
								<a href="https://www.instagram.com/wlulibrary"><i class="fa fa-instagram fa-2x"></i><span class="sr-only">Library Instagram Page</span></a>
								<a href="https://www.twitter.com/wlulibrary"><i class="fa fa-twitter-square fa-2x"></i><span class="sr-only">Library Twitter Page</span></a>
								<a href="https://www.facebook.com/wlulibrary"><i class="fa fa-facebook-square fa-2x"></i><span class="sr-only">Library Facebook Page</span></a>
							</div>
							<div class="col-xs-12 col-sm-8">
								<p class="footer-text">Washington and Lee University Library<br>204 West Washington Street * Lexington, Virginia 24450<br>(540) 458-8643</p>
								<p class="footer-text">&copy; <?php echo date('Y'); ?>, Washington and Lee University | <a href="https://www.wlu.edu/about-this-site/privacy-policy">Privacy Policy</a> | <a href="/about/contact-us/">Email Us</a></p>
							</div>
							<div class="col-xs-12 col-sm-2 fdlp-container">
								<a href="https://library.wlu.edu/about/fdlp/"><img src="/wp-content/uploads/2014/05/fdlp-emblem-logo-text-color.png" class="fdlp-logo" alt="Federal Depository Library Program Logo"/></a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_enqueue_script ( 'inputmask', get_stylesheet_directory_uri() . '/inputmask/dist/jquery.inputmask.bundle.js' ); ?>
		<?php wp_enqueue_script ( 'wlu-local-js', get_stylesheet_directory_uri() . '/wlu-local.js' ); ?>
		<?php wp_footer(); ?>

	</body>
</html>
