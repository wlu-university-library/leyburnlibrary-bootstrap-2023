<?php
/**
 * The index page template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from active sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>

<div class="content-area home-page" id="main-column">
	<main id="main" class="site-main" role="main">
		<div id="wlu-discovery-and-links" class="row">
			<div class="col-xs-12 col-md-12 col-lg-10 col-xl-8 col-md-offset-0 col-lg-offset-1 col-xl-offset-2 discovery-search" id="discovery-search">
				<div class="col-xs-10" style="z-index: 900;">
					<?php the_widget( 'WLU_Primo_Widget' ); ?>
				</div>
				<div class="col-xs-2" style="padding-left: 1rem">
					<div class="primo-element primo-advanced-search"><a target="_blank" href="https://wlu.primo.exlibrisgroup.com/discovery/search?vid=01WLU_INST:01WLU&sortby=rank&mode=advanced&lang=en">Advanced Search</a></div>
					<div class="primo-element"><a href="https://wlu.primo.exlibrisgroup.com/discovery/login?vid=01WLU_INST:01WLU&lang=en">My Library Account</a></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-8 col-lg-6 col-xl-5 col-md-offset-0 col-lg-offset-1 col-xl-offset-2" id="home-navigation">
				<div class="col-xs-12 col-md-12 home-nav-menu" id="menu-research">
					<!-- <h3>Research</h3> -->
					<div class='col-xs-4 research-link'>
						<a href="/research">
							<div class='research-link-image rli-research-help'></div>
							<div class='research-link-desc'>
								<h4>Research Help</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-4 research-link'>
						<a href="http://libguides.wlu.edu/az.php">
							<div class='research-link-image rli-atoz'></div>
							<div class='research-link-desc'>
								<h4>A-Z Databases List</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-4 research-link'>
						<a href="/services">
							<div class='research-link-image rli-services'></div>
							<div class='research-link-desc'>
								<h4>Library Services</h4>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-12 home-nav-menu" id="menu-services">
					<div class='col-xs-4 research-link'>
						<a href="http://libguides.wlu.edu">
							<div class='research-link-image rli-subject-guide'></div>
							<div class='research-link-desc'>
								<h4>Subject &amp; Course Guides</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-4 research-link'>
						<a href="https://wlu.primo.exlibrisgroup.com/discovery/jsearch?vid=01WLU_INST:01WLU&sortby=rank&lang=en">
							<div class='research-link-image rli-journals'></div>
							<div class='research-link-desc'>
								<h4>Journal Search</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-4 research-link'>
						<a href="http://library.wlu.edu/scholar">
							<div class='research-link-image rli-scholar'></div>
							<div class='research-link-desc'>
								<h4>W&amp;L Scholarly Works</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 col-xl-3">
			<?php
				$wlulh = new WLU_Library_Hours();
				echo $wlulh->show_text();
			?>
			</div>
		</div>
		<div id="wlu-news-and-events" class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 col-xl-offset-2" id="news-and-events-box">
				<div id="bloggery-feed" class="col-xs-12 col-sm-6 col-md-12">
					<?php the_widget( 'WP_Widget_RSS', array('title' => 'Library Blog', 'url' => 'https://library.wlu.edu/libnews/feed', 'items' => 5, 'show_date' => false) ); ?>
					<div>
						<h2>Upcoming Events in the Library</h2>
						<?php echo do_shortcode( '[do_widget id=ai1ec_agenda_widget-2]' ); ?>
						<div class="calbtn">
							<a class="btn btn-primary" href="https://library.wlu.edu/calendar/">More Events...</a>
						</div>
					</div>
                                        <link href="https://fonts.googleapis.com/css?family=Overpass:400,400i,700,700i" rel="stylesheet">
                                        <style type="text/css" rel="stylesheet">
                                                body {
                                                  font-family: "Overpass";
                                                }

						.wlu-jumbotron .cycloneslider {
    							margin: 0px;
						}

						.ai1ec-agenda-widget-view {
							max-width: 600px;
						}

						.ai1ec-agenda-widget-view .ai1ec-date {
							padding: .75em 0;
							background: rgba(255, 255, 255, .9);
							border-top: none;
						}

						.ai1ec-agenda-widget-view .ai1ec-date:first-of-type {
							border-top-left-radius: .5em;
							border-top-right-radius: .5em;
						}


						.ai1ec-agenda-widget-view .ai1ec-date:last-of-type {
							border-bottom-left-radius: .5em;
							border-bottom-right-radius: .5em;
						}
					
						.calbtn {
							max-width:  600px;
    							text-align: right;
    							margin: .5em 0;
						}

						.fa-calendar {
							display: none;
						}


						.research-link-desc h4 {
							font-size: 1em;
						}

						#wlulhbox {
					    		color: #fff;
    							letter-spacing: .5px;
    							width: 90%;
    							font-size: 1em;
    							padding: 0 0 0 1.5em;
						}

						#wlulhbox h2 {
							font-size: 1.5em;
							margin-top: .5em;
						}

						#wlulhbox td {
							border-top: none;
						}
					</style>
				</div>
			</div>			
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 col-xl-4 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xl-offset-0">
				<h2></h2>
				<div class="instagram-feed">
					
				</div>
			</div>			
		</div>
	</main>
</div>
<?php get_footer(); ?>
