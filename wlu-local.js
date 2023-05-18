jQuery(document).ready ( function($) {
	if ($(location).attr('hash') == '#appointmentForm') {
	    $("#appointmentForm").show();
	}

	$( ".wlutip, .rsswidget" ).tooltip();


	$(".dropdown-menu .dropdown").on("mouseover", function() {
		$(this).children("ul").show();
	}).on("mouseout", function() {
		$(this).children("ul").hide();
	});

	//$(".widget_bootstrapbasic_search_widget .form-group").attr ( {"placeholder": "Search the library's website...", "id": "wlu-library-site-search"} );
	//$(".widget_bootstrapbasic_search_widget .navbar-form .form-group").replaceWith ( '<div class="form-group"><div class="input-group"><span class="sr-only"><label for="wlu-library-site-search">Library Website Search Input Box</label></span><input id="wlu-library-site-search" name="s" class="form-control" placeholder="Search the library\'s website..." value="" title="" type="text" /><span class="input-group-btn"><button class="btn btn-primary glyphicon glyphicon-search" aria-label="Start website search"></button></span></div></div>' );
	
	$("a[title='Washington and Lee University Publications, maintained by the University Library']").attr ("href", "http://library.wlu.edu/scholar");
		
	$(".widget_bootstrapbasic_search_widget .form-control").focus (function () {
		if ($(this).val() == "") {
			$(this).css( {"font-style": "normal", "color": "#000" } );
		}
	});
		
	$(".widget_bootstrapbasic_search_widget .form-control").blur (function () {
		if ($(this).val() == "") {
			$(this).css( {"font-style": "italic", "color": "#222" } );
		}
	});
	
	/* GOOGLE CUSTOM SEARCH */
	setTimeout( function(){
		$("#gsc-i-id1").focus (function () {
			if ($(this).val() == "") {
				$(this).css( {"font-style": "normal", "color": "#000" } );
			}
		});
		$("#gsc-i-id1").blur (function () {
			if ($(this).val() == "") {
				$(this).css( {"font-style": "italic", "color": "#222" } );
			}
		});
	    $("#gsc-i-id1").attr("placeholder", "Search the library's website...");
	  }
	, 1000 );
	/***********************/

    $('.ui-dialog-titlebar-close').append('<i class="fa fa-times"></i>');
	
	$(".glyphicon-search").on ( 
		"click", function () {
			$(this).parent().submit();
		}
	);
	
	$(".widget_bootstrapbasic_search_widget .form-control").attr ( "title", "" );
	
	$('<li role="presentation" class="divider"></li>').insertBefore(".menu-no-link");
	
	$(".menu-no-link a").each(function() {
    	$(this).replaceWith(this.childNodes);
  	});

	$('.widget_rss li').prepend("<span class='glyphicon glyphicon-paperclip libnews-icon'></span>");
	
	if (typeof iFrameResize == 'function') {
		iFrameResize({
			log: true, 
			enablePublicMethods: true
		});
	}
	
	$(".sp-toggle a").click( function() {
		$("#menu-university-navigation li").toggleClass("univ-menu-zindex-low");
		_paq.push(['trackEvent', 'Help and Information Dropdown', 'Clicked']);
	});
	
	$(document).mouseup(function (e) {
	    var container = $(".sp-content");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0  // ... nor a descendant of the container
			&& !$('.sp-toggle a').is(e.target)
			&& container.is(':visible'))
	 	{
	        container.slideUp ('slow', function () {
				$( '.sp-toggle a' ).html( sp_l10n.open );
				$( '.sp-toggle a' ).attr( 'aria-selected', 'false' );
				$("#menu-university-navigation li").removeClass("univ-menu-zindex-low");
			});
	    }
	});
	
	function clearPurchaseRequestFields () {
		$(".av-field").val('');
		$(".book-field").val('');
		$(".per-field").val('');
	}

	function clearLargeFormatFields () {
		$(".budget-field").val('');
	}
	
	function getQueryVariable(variable)	{
	       var query = window.location.search.substring(1);
	       var vars = query.split("&");
	       for (var i=0;i<vars.length;i++) {
	               var pair = vars[i].split("=");
	               if(pair[0] == variable){return decodeURIComponent(pair[1]);}
	       }
	       return(false);
	}
	
	$("#research-request-librarian").val(getQueryVariable("librarian"));
	
	$("#purchase-item-type").change ( function () {
		clearPurchaseRequestFields();
		if ($(this).val() == "Book") {
			$("#av-details").hide();
			$("#periodical-details").hide();
			$("#book-details").fadeIn();
			//$("input[name='book-date-needed']").attr("disabled","");
			$(".date-needed-group").hide();
			$("input[name='rush-request[]']").click(function () {
				$("input[name='book-date-needed']").val("");
				//$("input[name='book-date-needed']").prop('disabled', function(i, v) { return !v; });
				$(".date-needed-group").toggle();
			})
		} else if ($(this).val() == "Audio/Visual") {
			$("#book-details").hide();
			$("#periodical-details").hide();
			$("#av-details").fadeIn();
		} else if ($(this).val() == "Periodical") {
			$("#book-details").hide();
			$("#av-details").hide();
			$("#periodical-details").fadeIn();
		} else {
			$("#av-details").hide();
			$("#book-details").hide();
			$("#periodical-details").hide();
		}
	});

	if (typeof $("#fs-unitcode").inputmask === "function") {
		$("#fs-unitcode").inputmask("999999");
	}

	$("#lfp-purpose").change ( function () {
		clearLargeFormatFields();
		var lfp = document.getElementById("lfp-purpose").selectedIndex;
		if (lfp === 1) {
			$("#stunoacad").hide();
			$("#facstaff").hide();
			$("#deptorg").hide();
			$("#budget").hide();
			$("#stuacad").fadeIn();
		} else if (lfp === 2) {
			$("#stuacad").hide();
			$("#facstaff").hide();
			$("#deptorg").hide();
			$("#budget").hide();
			$("#stunoacad").fadeIn();
		} else if (lfp === 3) {
			$("#stunoacad").hide();
			$("#stuacad").hide();
			$("#deptorg").hide();
			$("#facstaff").fadeIn();
			$("#budget").fadeIn();
		} else if (lfp === 4) {
			$("#stunoacad").hide();
			$("#facstaff").hide();
			$("#stuacad").hide();
			$("#deptorg").fadeIn();
			$("#budget").fadeIn();
		} else {
			$("#stunoacad").hide();
			$("#facstaff").hide();
			$("#stuacad").hide();
			$("#deptorg").hide();
			$("#budget").hide();
		}
	});

	if ($("#announcer-top").length) {
		$(".page-container").css({'position': 'absolute', 'top': '71px'});
		$("#sidebar-sliding-panel").css({'position': 'absolute', 'top': '71px'});
	}
	
	$("#dirsubj").click( function() {
		$("#directory-block-alpha").hide();
		$("#directory-block-depts").hide();
		$("#directory-block-subjects").fadeIn();
	});
	$("#dirdept").click( function() {
		$("#directory-block-alpha").hide();
		$("#directory-block-subjects").hide();
		$("#directory-block-depts").fadeIn();
	});
	$("#diralpha").click( function() {
		$("#directory-block-depts").hide();
		$("#directory-block-subjects").hide();
		$("#directory-block-alpha").fadeIn();
	});

/**** AFFIXED SIDE NAVS ****/	
    if ($('#scrollnav').length) {
		$('#scrollnav').affix({
	      offset: {
	        top: $('#scrollnav').offset().top,
	   		bottom: 560
	      }
	    });
	}

  	$("body").scrollspy({target: ".scrollnav", offset:50});
		
	$(".sidenav li a[href^='#']").on('click', function(e) {
	   // prevent default anchor click behavior
	   e.preventDefault();
	   // store hash
	   var hash = this.hash;
	   // animate
	   $('html, body').animate({
	       scrollTop: $(this.hash).offset().top
	     }, 500, function(){
	       // when done, add hash to url
	       // (default click behaviour)
	       window.location.hash = hash;
	     });
	});
/**************************/

/****** BACK TO TOP ******/	

	if ($('#back-to-top').length) {
	    var scrollTrigger = 100, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}
/**************************/

	$("#liaisonSubjects").on("change", function () {
		$(".liaison-small-box").hide();
		var lsub = $("#liaisonSubjects").val();
		$("#" + lsub).fadeIn();
	});

    $('#appointmentForm').on('hide.bs.collapse', function () {
        $('#appointmentButton').html("Ask Us <span class='glyphicon glyphicon-chevron-down'></span>");
    });
    
    $('#appointmentForm').on('show.bs.collapse', function () {
        $('#appointmentButton').html("Close <span class='glyphicon glyphicon-chevron-up'></span>");
    });

    $('#showHideList').on('hide.bs.collapse', function () {
        $('#showHideList').html("Show List <span class='glyphicon glyphicon-chevron-down'></span>");
    });
    
    $('#showHideList').on('show.bs.collapse', function () {
        $('#showHideList').html("Hide List <span class='glyphicon glyphicon-chevron-up'></span>");
    });

	//$('#bloggery-feed h2.widgettitle a.rsswidget').attr("href", "https://library.wlu.edu/events-calendar/");
	$('#bloggery-feed h2.widgettitle').append(" <a href='https://library.wlu.edu/events/'><span class='fa fa-calendar'></span></a>");

    var $myGroup = $('#adoptgroup');
    $myGroup.on('show.bs.collapse','.collapse', function() {
        $myGroup.find('.collapse.in').collapse('hide');
    });

    $myGroup.on('click', '.btn-lg', function() {
	$(this).siblings().removeClass('active');
	$(this).siblings().removeClass('btn-info');
	$(this).toggleClass('btn-info');
	$(this).toggleClass('active');
    });

    var supportHeight = $('header').height() + $('#wlu-breadcrumbs').height();
    $('#wlu-support-container #nav').affix({
      offset: {
        top: supportHeight
      }
    });	
    
    $('#wlu-support-container #nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
        if ($(this.hash).offset()) {
            var hash = this.hash;
	    var topoffset = ($('#nav').hasClass('affix-top')) ? supportHeight / 2 - 20 : 0;
	    var scrollto = $(this.hash).offset().top - $('#nav').height() - topoffset;
            $('html, body').animate({scrollTop: scrollto }, 700, function(){
                //window.location.hash = hash;
            });
	} else {
	    $('html,body').animate({scrollTop: 0}, 700);
	}
    });
});

