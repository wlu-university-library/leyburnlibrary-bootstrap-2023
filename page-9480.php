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
 		    <div id="search-and-fastfinds" class="col-xs-12 col-md-7 col-lg-6 col-xl-5 col-lg-offset-1 col-xl-offset-2">
			<div class="col-xs-12 discovery-search" id="discovery-search">
				<h2>Library Catalog</h2>
				<div class="col-xs-12" style="z-index: 900;">
					<?php the_widget( 'WLU_Primo_Widget_2020' ); ?>
				</div>
			</div>
		    </div>
		    <div class="col-xs-12 col-md-5 col-lg-4 col-xl-3" style="padding-left: 15px">
		      <?php
			echo '<div id="wlulhbox" class="dialog-modal">';
            		date_default_timezone_set('America/New_York');
			$today = date("Y-m-d");
            		$todayfull = date("l, F j, Y");
			if ($today <= '2021-12-19' && $today >= '2021-12-13') {
				echo "<h2>Finals Week Hours</h2>";
             			echo "<table id='lhtable' class='table table-condensed'>";
				echo "<tr><th class='lh-libname' colspan='4'>Leyburn and Telford Libraries</th></tr>";
				echo "<tr><th class='lh-libname' colspan='4'><em>For W&amp;L swipe card holders only:</em></th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Mon - Thu:</td><td colspan='3'>Open 24/7</td></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Fri:</td><td>Midnight</td><td>&mdash;</td><td>6:00pm</td></tr>";
				echo "<tr><th class='lh-libname' colspan='4'><em>For the general public:</em></th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Mon - Thu:</td><td>8:30am</td><td>&mdash;</td><td>4:30pm</td></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Fri:</td><td>8:30am</td><td>&mdash;</td><td>6:00pm</td></tr>";
				echo "<tr><th class='lh-libname' colspan='4'><em>For all:</em></th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Sat - Sun:</td><td colspan='3'>Closed</td></tr>";
			} elseif ($today >= '2021-12-20' && $today <= '2022-01-02') {
				echo "<h2>Winter Break Hours</h2>";
             			echo "<table id='lhtable' class='table table-condensed'>";
				echo "<tr><th class='lh-libname' colspan='4'>Leyburn and Telford Libraries</th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Mon - Sun:</td><td colspan='3'>Closed</td></tr>";
			} elseif ($today >= '2022-01-03' && $today <= '2022-01-09') {
				echo "<h2>Pre Winter Term Hours</h2>";
             			echo "<table id='lhtable' class='table table-condensed'>";
				echo "<tr><th class='lh-libname' colspan='4'>Leyburn and Telford Libraries</th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Mon - Fri:</td><td>8:30am</td><td>&mdash;</td><td>4:30pm</td></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Sat:</td><td colspan='3'>Closed</td></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Sun:</td><td>Noon</td><td>&mdash;</td><td>8:30pm (public)<br>Resume 24 hours (W&amp;L)</td></tr>";
			} else {
				echo "<h2>Winter Term Hours</h2>";
             			echo "<table id='lhtable' class='table table-condensed'>";
				echo "<tr><th class='lh-libname' colspan='4'>Leyburn and Telford Libraries</th></tr>";
				echo "<tr><th class='lh-libname' colspan='4'><em>For W&amp;L swipe card holders only:</em></th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Mon - Sun:</td><td colspan='3'>Open 24/7</td></tr>";
				echo "<tr><th class='lh-libname' colspan='4'><em>For the general public:</em></th></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Mon - Fri:</td><td>7:30am</td><td>&mdash;</td><td>8:30pm</td></tr>";
				echo "<tr><td style='width: 20%; text-indent: 1em;'>Sat - Sun:</td><td>10:00am</td><td>&mdash;</td><td>8:30pm</td></tr>";
			}
            		echo "</table>";
			echo "</div>";
            ?>
		    </div>
		</div>
		<div class="row">
		    <div class="col-xs-12 col-md-7 col-lg-6 col-xl-5 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 col-xl-offset-2" id="news-and-events-box">
			<div class="col-xs-12" id="home-navigation">
			        <h2>Fast Finds</h2>
				<div class="col-xs-12 home-nav-menu" id="menu-research">
					<div class='col-xs-2 research-link'>
						<a href="http://libguides.wlu.edu/az.php">
							<div class='research-link-image rli-database-list'></div>
							<div class='research-link-desc'>
								<h4>Database<br>List</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-2 research-link'>
						<a href="https://wlu.primo.exlibrisgroup.com/discovery/jsearch?vid=01WLU_INST:01WLU&sortby=rank&lang=en">
							<div class='research-link-image rli-journal-list'></div>
							<div class='research-link-desc'>
								<h4>Journal<br>Search</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-2 research-link'>
						<a href="https://library.wlu.edu/about/library-directory/">
							<div class='research-link-image rli-staff-list'></div>
							<div class='research-link-desc'>
								<h4>Staff<br>Directory</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-2 research-link'>
						<a href="https://library.wlu.edu/services/roomreservations/">
							<div class='research-link-image rli-room-booking'></div>
							<div class='research-link-desc'>
								<h4>Room<br>Reservations</h4>
							</div>
						</a>
					</div>
					<div class='col-xs-2 research-link'>
						<a href="https://library.wlu.edu/research/zotero/">
							<div class='research-link-image rli-zotero'></div>
							<div class='research-link-desc'>
								<h4>Zotero</h4>
							</div>
						</a>
					</div>
				</div>
			  </div>
                    </div>
		    <div class="col-xs-12 col-md-5 col-lg-4 col-xl-3" style="padding-left: 15px">
		      <h2>Ask a Librarian</h2>
		      <div id="libchat_0c3a7abb81e98a66d757f626c920c424"></div>
              	      <script type="text/javascript" src="https://v2.libanswers.com/load_chat.php?hash=0c3a7abb81e98a66d757f626c920c424"></script>
		    </div>
		</div>
		<div id="wlu-news-and-events" class="row">
			<div class="col-xs-12 col-md-7 col-lg-6 col-xl-5 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 col-xl-offset-2" id="news-and-events-box">
				<div id="bloggery-feed" class="col-xs-12">
					<!-- <div>
						<h2>Upcoming Events</h2>
						<?php //echo do_shortcode( '[do_widget id=ai1ec_agenda_widget-2]' ); ?>
						<div class="calbtn">
							<a class="btn btn-primary" href="https://library.wlu.edu/calendar/">More Events...</a>
						</div>
					</div> -->
					<?php the_widget( 'WP_Widget_RSS', array('title' => 'The Blog', 'url' => 'https://library.wlu.edu/libnews/feed', 'items' => 4, 'show_date' => false, 'show_summary' => false ) ); ?>
					<div class="calbtn">
						<a class="btn btn-primary" href="https://library.wlu.edu/libnews/">More Posts...</a>
					</div>
					<style type="text/css" rel="stylesheet">
						body {
						  font-family: "Overpass";
						}

						.site-title {
							font-family: "Crimson Text", "Palatino", "Palatino Linotype", "Lusitana" !important;
						}

						#content {
							outline: none;
						}

						#responsive-header-menu, #header-menu, #header-menu-mobile, #header-menu-mobile-container {
						  text-shadow: none;
						  background: #0076a8;
						}

						.wlu-jumbotron .cycloneslider {
    							margin: 0px;

						}

						.timely {
							font-family: inherit;
							font-size: inherit;
						}

						.ai1ec-agenda-widget-view {
							max-width: 99%;
						}

						.ai1ec-agenda-widget-view .ai1ec-date {
							padding: .75em 0;
							background: inherit;
							border-top: none;
						}

						.ai1ec-agenda-widget-view .ai1ec-date.ai1ec-today, .ai1ec-agenda-view .ai1ec-date.ai1ec-today {
    							background: rgba(153, 214, 234, .25);
							border-top: none;
						}
					
						.calbtn {
							max-width:  98%;
    							text-align: right;
    							margin: .5em 0;
						}

						.calbtn a {
							width: 120px;
    							background: #0076a8;
    							border: none;
							border-radius: 0;
						}
						
						#sb_instagram .sbi_follow_btn a {
    							background: #0076a8;
    							color: #fff;
						}

						#sb_instagram #sbi_load .sbi_load_btn, #sb_instagram .sbi_follow_btn a {
							border-radius: 0;
						}

						.fa-calendar {
							display: none;
						}

						.widget_rss {
							margin-top: 2em;
						}

						.widget_rss li {
							padding: .25em 30px;
						}

						.widget_rss .widgettitle a:hover {
							text-decoration: none;
							cursor: text;
						}

						.research-link > a:hover, .research-link > a:active {
							text-decoration: none;
							color: #3d6b99;
						}

						.research-link-desc h4 {
							font-size: .9em;
							text-align: center;
							letter-spacing: .8px;
						}

						#wlulhbox {
					    		color: #000;
    							letter-spacing: .5px;
    							width: 100%;
    							padding-top: 5px;
							margin-top: 25px;
						}

						#wlulhbox h2 {
							line-height: 1.5em;
							margin-top: .5em;
							font-size: 30px;
							color: #333;
						}

						#wlulhbox td {
							border-top: none;
						}

						body.custom-background {
	    						background-color: #f8f9fd;
						}

						#wlu-discovery-and-links {
							background-color: inherit; 
						}

						#wlu-news-and-events {
							background: inherit;
							margin-top: 1em;
						}

						#discovery-search {
							background: #e8e8e8;
							border-radius: 0;
						}

						.discovery-search, #home-navigation {
							border: none;
							margin-bottom: 0;
						}

						.discovery-search h2 {
							margin-top: .5em;
							margin-bottom: 1em;
							color: #333;
						}
		
						#home-navigation {
							padding: 0;
						}

						.research-link {
							border: none;
							background: inherit;
							padding: 0;
							width: 16.66666667%;
							margin: 1.5%;
						}

						.research-link-image {
							height: 100%;
							background-color: #fff;
						}

						#news-and-events-box {
							padding: 0 15px;
						}

						#primo-input-box-2020 .input-group-btn .glyphicon-search {
							height: 44.35px;
							border-radius: 0;
    							border: 1px solid #0076a8;
						}
				
						#primo-input-box-2020 #primoQueryTemp2020 {
							margin-top: 4px;
							height: 44.35px;
							border-radius: 0;
						}

						#primoQueryTemp2020::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  							color: #555;
  							opacity: 1; /* Firefox */
						}

						#primoQueryTemp2020:-ms-input-placeholder { /* Internet Explorer 10-11 */
  							color: #555;
						}
						
						#primoQueryTemp2020::-is-input-placeholder { /* Microsoft Edge */
  							color: #555;
						}


						#primo-input-box-2020 .list-group {
							margin-top: 4px;
						}

						#primo-input-box-2020 a {
							border-radius: 0;
						}

						#primo-input-box-2020 .active {
							background: #0076a8;
						}

						#primo-input-box-2020 button.glyphicon-search {
							background: #0076a8;
						}

						.primo-element {
							height: 44px;
							line-height: 44px;
						}

						.primo-explanation {
							font-style: italic;
							color: #444;
						}

						.primo-links a {
							color: #333;
						}
			
						.primo-links a:hover {
							color: #3d6b99;
							text-decoration: none;
						}

						.rli-database-list {
  						  	background-image: url(/wp-content/uploads/2019/11/jstor2.png);
    							background-position: center;
							background-size: contain;
						}

						.rli-journal-list {
    							background-image: url(/wp-content/uploads/2020/01/ste.png);
    							background-position: center center;
    							background-size: cover;
						}

						.rli-staff-list {
							background-position: center 25%;
							background-size: cover;
						}

						.rli-room-booking {
    							background-image: url(/wp-content/uploads/2020/01/reservations.jpg);
    							background-size: cover;
							background-position: 25% center;
						}

						.rli-zotero {
    							background-image: url(/wp-content/uploads/2019/12/zotero.png);
    							background-position: center;
    							background-size: contain;
						}

						.instagram-widget {
							padding-left: 15px;
						}

						#sb_instagram #sbi_load .sbi_load_btn {
							background: #0076a8;
						}

						#sb_instagram #sbi_load .sbi_load_btn:hover {
							background: #265a88;
							box-shadow: none;
						}

						#sb_instagram .sbi_follow_btn a {
							background: #333;
						}

						#sb_instagram .sbi_follow_btn a:hover {
							box-shadow: inset 0 0 20px 20px rgba(255,255,255,.25);
						}

						#site-footer {
							margin-top: 3em;
						}

						#univ-footer-site-search {
    							margin-bottom: 20px;
							margin-top: 0;
						}

						#univ-footer-site-search div:last-of-type div:last-of-type {
							text-align: right;
						}

						.footer-text {
    							margin: 0 0 1em;
						}


						.fdlp-container {
							text-align: right;
						}

						.fdlp-logo {
							position: static;
						}

						.current-exhibits {
							padding-left: 15px;
						}

						.ai1ec-agenda-widget-view .ai1ec-date.ai1ec-today {
							background: transparent;
						}

						#ai1ec_agenda_widget-2 .ai1ec-agenda-widget-view .ai1ec-date-title {
							background-image: none;
							border-radius: 0;
						}


						#ai1ec_agenda_widget-2 .ai1ec-agenda-widget-view .ai1ec-event > a {
							border-radius: 0;
							min-height: 70px;
						}

						#ai1ec_agenda_widget-2 .ai1ec-agenda-widget-view .ai1ec-month {
							border-radius: 0;
						}

						#ai1ec_agenda_widget-3 .ai1ec-date-title, .ai1ec-popup-excerpt {
							display: none;
						}

						#ai1ec_agenda_widget-3 .ai1ec-agenda-widget-view .ai1ec-event {
							margin: 0;
						}

						#ai1ec_agenda_widget-3 .ai1ec-popup-trigger {
							display: none;
						}

						#ai1ec_agenda_widget-3 .ai1ec-popover {
							display: block !important;
							position: static;
							max-width: max-content;
							padding: 10px;
    							background: transparent;
    							border: none;
    							-webkit-box-shadow: none;
    							box-shadow: none;
						}
		
						#ai1ec_agenda_widget-3 .ai1ec-popover.ai1ec-popup,
						#ai1ec_agenda_widget-4 .ai1ec-popover.ai1ec-popup {
							width: 100%;
						}

						#ai1ec_agenda_widget-3 .ai1ec-event-location,
						#ai1ec_agenda_widget-4 .ai1ec-event-location {
							display: block;
						}

						#ai1ec_agenda_widget-3 .post-edit-link,
						#ai1ec_agenda_widget-4 .post-edit-link {
							display: none;
						}

						#ai1ec_agenda_widget-3 .ai1ec-allday-badge,
						#ai1ec_agenda_widget-4 .ai1ec-allday-badge {
							display: none;
						}


						#ai1ec_agenda_widget-3 .ai1ec-popup-title,
						#ai1ec_agenda_widget-4 .ai1ec-popup-title {
							font-size: inherit;
							font-weight: normal;
						}	

						#ai1ec_agenda_widget-3 .ai1ec-event-time,
						#ai1ec_agenda_widget-4 .ai1ec-event-time {
							font-weight: normal;
						}

						#ai1ec_agenda_widget-3 .ai1ec-agenda-widget-view .ai1ec-date,
						#ai1ec_agenda_widget-4 .ai1ec-agenda-widget-view .ai1ec-date {
							padding: 0;
						}

						#ai1ec_agenda_widget-4 .ai1ec-date-title {
							display: none;
						}

						#ai1ec_agenda_widget-4 .ai1ec-today {
							background: transparent;
						}

						#ai1ec_agenda_widget-4 .ai1ec-date-events,
						#ai1ec_agenda_widget-4 .ai1ec-event {
							margin: 0;
						}

						#ai1ec_agenda_widget-4 .ai1ec-event a {
							padding: 0;
							background: transparent;
							border: none;
							color: #000;
							cursor: default;
						}

						#ai1ec_agenda_widget-4 .ai1ec-event a:hover {
							color: #000;
						}
						
						#ai1ec_agenda_widget-4 .ai1ec-event-title {
							display: none;
						}


						.rhdrow + .rhdrow td:first-child {
							visibility: hidden;
						}

						.gsc-search-box-tools .gsc-search-box .gsc-input {
    							height: 27px;
    							padding-right: 0px;
						}

						.gsc-search-button-v2, .gsc-search-button-v2:hover, .gsc-search-button-v2:focus {
    							border-color: #0076a8;
    							margin-left: 0;
    							border-radius: 0;
							background-color: #0076a8;
						}

						#lhtable td, #lhtable th {
							padding: 3px;
							border-top: none;
						}

						.rssSummary {
							font-size: .85em;
    							font-style: italic;
    							color: #5e5e5e;
    							padding: 0 1em;
    							line-height: 1.35em;
							letter-spacing: initial;
							word-spacing: initial;
							text-indent: 0;
						}

						.covid-rhc-head {
							border-top: 1px solid #e8e8e8;
						}

						.covid-rhc-row td {
							padding: .5em;
						}

						.covid-rhc-dark {
							background-color: #e8e8e8;
						}

						@media screen and (max-width: 992px) {
							#news-and-events-box {
							    	margin-bottom: 3.5em;
								margin-top: 0px;
							}
						}
	
						@media screen and (max-width: 510px) {
							.research-link {
								height: auto;
								min-height: auto;
							}
	
							.research-link-image {
								height: 75px;
							}

							#news-and-events-box {
							    	margin-bottom: 0;
							}
						}
					</style>
				</div>
			</div>			
			<div class="col-xs-12 col-md-5 col-lg-4 col-xl-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 col-xl-offset-0 instagram-widget">
				<h2>@WLULibrary <i class="fa fa-instagram"></i></h2>
				<div class="instagram-feed">
					<?php echo do_shortcode( '[instagram-feed]' ); ?>
				</div>
			</div>			
			<script>
				jQuery(document).ready(function($) {
					$(".widget_rss .widgettitle a").click(function() {
						return false;
					});

					var dblist = ["/wp-content/uploads/2019/12/project-muse_rgb-1-e1576005458209.png", "/wp-content/uploads/2019/11/jstor2-e1576005543406.png"];

					var journallist = ["/wp-content/uploads/2019/12/nejmID_preferred_RGB_JPG-e1578492610259.jpg", "/wp-content/uploads/2019/12/Journal-of-Cerebral-Blood-Flow-Metabolism.png", "/wp-content/uploads/2019/12/Journal-of-Marketing.png", "/wp-content/uploads/2019/12/The-American-Journal-of-Sports-Medicine.png", "/wp-content/uploads/2020/01/chb.png", "/wp-content/uploads/2020/01/lancet.png", "/wp-content/uploads/2020/01/ste.png"];

					var stafflist = ["/wp-content/uploads/2019/12/PaulaKiser_nd.jpg", "/wp-content/uploads/2019/12/kane.jpeg", "/wp-content/uploads/2019/12/Mary-Abdoney_10_29_2019.png", "/wp-content/uploads/2019/12/ElizabethTeaff_10_29_2019.jpg", "/wp-content/uploads/2019/12/Jeff-Barry_10_29_2019.jpg", "/wp-content/uploads/2014/08/tom_camden.jpg", "/wp-content/uploads/2019/12/Mackenzie-Brooks_10_29_2019.jpg", "/wp-content/uploads/2014/08/john_tombarge.jpg", "/wp-content/uploads/2019/12/EmilyCook_10_29_2019-1.jpg",  "https://library.wlu.edu/wp-content/uploads/2020/11/K.T.-Vaughan01-scaled.jpg"];

					var randpic = stafflist[Math.floor(Math.random()*stafflist.length)];
					$(".rli-staff-list").css("background-image", "url(" + randpic + ")");

					var randpic = journallist[Math.floor(Math.random()*journallist.length)];
					$(".rli-journal-list").css("background-image", "url(" + randpic + ")");

					var randpic = dblist[Math.floor(Math.random()*dblist.length)];
					$(".rli-database-list").css("background-image", "url(" + randpic + ")");

					$("#ai1ec_agenda_widget-3 .ai1ec-popover").removeClass("ai1ec-popup");
					$("#ai1ec_agenda_widget-4 .ai1ec-popover").removeClass("ai1ec-popup");
					$("#ai1ec_agenda_widget-4 .ai1ec-event a").on("click", function(e) {
					    e.preventDefault();
					});

					function printRow(start, end) {
					    // $("#lhtable").append("<tr class='rhdrow'><td>Research Help Desk:</td><td class='text-center'>" + start + "</td><td class='text-center' style='width: 5px'>&mdash;</td><td class='text-center'>" + end + "</td></tr>");
					}

					var laststart, lastend, start, end = "";
					var firstloop = true;
                /*
					if (document.querySelector("#ai1ec_agenda_widget-4 .ai1ec-no-results")) {
					    $("#lhtable").append("<tr class='rhdrow'><td>Research Help Desk:</td><td class='text-center' colspan='3'>Closed</td></tr>");
					} else {
					    $("#ai1ec_agenda_widget-4 .ai1ec-popup-trigger .ai1ec-event-time").each(function() {
					        var text = $(this).text();
					        var parts = text.split(" @ ");
					        var times = parts[1].split(" – ");
						start = times[0].trim();
						end = times[1].trim();
						if (firstloop) {
						    laststart = start;
						    firstloop = false;
						} else {
						    if (lastend !== start) {
							printRow(laststart, lastend);
							laststart = start;
						    }
						}
						lastend = end;
					    });
					    printRow(laststart, lastend);
					}
                    */

					/* Blog Summary More Links */
					$('.rssSummary').each(function () {
						var summary = $(this).text();
						var link = $(this).prev().attr('href');
						summary = summary.slice(0, -3) + `<span style="font-size: .75em;">[<a href="${link}" style="color: rgba(0,0,255,.85); text-decoration: none; border-bottom: 1px dotted rgba(0,0,255,.85);">read more...</a>]</span>`;
						$(this).html($.trim(summary));
					});

				});
				
			</script>
		</div>
	</main>
</div>
<!-- php get_footer();  -->
<?php require("footer2020.php"); ?>
