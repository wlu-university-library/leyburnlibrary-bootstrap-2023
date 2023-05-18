<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
					<div id="footer-middle" class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2">
						<div class="col-xs-6 col-sm-6 col-md-6 footer-left">
							<h3>About the University Library</h3>
							<p>The University Library supports Washington and Lee’s central mission of teaching, learning and research in the liberal arts by providing a wide range of materials in all formats for use in the classroom, in student learning, and in faculty research and preparation for teaching, and by offering a highly skilled staff to assist faculty, students, and other users in their knowledge inquiries.</p>
							<p>The Special Collections Department includes rare books and manuscripts and the University archives, with a collection emphasis on the history of the University and Rockbridge County, Generals Lee and Washington, and the Shenandoah Valley.</p>
							<p>The University Library’s two buildings, the James Graham Leyburn Library and the Robert Lee Telford Science Library serve as the University’s primary venue for study, research, and work with multimedia resources.</p>
						</div>
						
						<div class="col-xs-6 col-md-6 footer-right">
							<h3>Hours &amp; Contact</h3>
							<p>Leyburn and Telford Libraries are open 24x7 to W&amp;L students, faculty, and staff when classes are in session. University ID cards are needed to access the buildings between 10:00pm and 6:00am.</p><p>The general public is welcome between 6:00am and 10:00pm throughout the week.</p><p>Special Collections and Archives is open to the public Monday through Friday from 9:00am until 4:30pm except when Leyburn Library is closed for holidays.</p><p>For more details, please reference our <a href="/about/library-hours/" title="Library Hours">Hours page</a>.</p>
							<p class="address">204 West Washington Street<br/>Lexington, VA 24450<br/>540-458-8643<br/><a href="https://library.wlu.edu">https://library.wlu.edu</a></p>
							<div id="wlu-social-links">
								<a href="https://www.facebook.com/wlulibrary"><i class="fa fa-facebook-square fa-2x"></i><span class="sr-only">Library Facebook Page</span></a>
								<a href="https://www.twitter.com/wlulibrary"><i class="fa fa-twitter-square fa-2x"></i><span class="sr-only">Library Twitter Page</span></a>
								<a href="https://www.instagram.com/wlulibrary"><i class="fa fa-instagram fa-2x"></i><span class="sr-only">Library Instagram Page</span></a>
								<a href="https://www.youtube.com/user/UniversityLibraryWLU"><i class="fa fa-youtube-square fa-2x"></i><span class="sr-only">Library YouTube Page</span></a>
								<a href="https://library.wlu.edu/libnews/" title="Library News" id="lib-news-icon"><i class="fa fa-rss-square fa-2x"></i><span class="sr-only">Library News Blog</span></a>
							</div>
						</div>
						
						<div id="univ-footer-site-search" class="col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
							<span class="sr-only"><label for="wlu-library-site-search">Library Website Search Input Box</label></span>
							<?php //the_widget("GSC_Widget"); ?>
							<?php the_widget("WGS_Widget"); ?>
							<!-- <?php the_widget("BootstrapBasicSearchWidget", "navbaralign=navbar-right"); ?> -->
							<!-- <?php do_shortcode('[multisite_search_form type="horizontal" page="search-results"]'); ?> -->
						</div>
					</div>
				</div>
				
				<div id="footer-univinfo" class="row">
					<div class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2">
						<a href="https://library.wlu.edu/collections/government/fed_deposit.asp"><img src="/wp-content/uploads/2014/05/fdlp-emblem-logo-text-color.png" class="fdlp-logo" alt="Federal Depository Library Program Logo"/></a>
						<p class="footer-text">Washington &amp; Lee University Library * 204 West Washington Street * Lexington, Virginia 24450 * (540) 458-8643</p>
						<p class="footer-text">&copy; <?php echo date('Y'); ?>, Washington &amp; Lee University | <a href="https://www.wlu.edu/about-this-site/privacy-policy">Privacy Policy</a> | <a href="/about/contact-us/">Email Us</a></p>
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
