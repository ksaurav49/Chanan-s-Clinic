(function($) {

	"use strict";
	
	/* - Google Map */
	function initialize(obj) {

		var lat = $('#'+obj).attr("data-lat");
		var lng = $('#'+obj).attr("data-lng");
		var contentString = $('#'+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image = $('#'+obj).attr("data-marker");
		var zoomLevel = parseInt($("#"+obj).attr("data-zoom") ,10);
		var styles = [{"featureType":"landscape","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":" "},{"saturation":" "}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":" "},{"saturation":" "}]}]
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, "map_style"]
			}
		}
		map = new google.maps.Map(document.getElementById(obj), mapOptions);	
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
		infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: 300
		});		
		marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});
		if(contentString != '') {
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});	
		}

	}
	
	window.initMap = function() {}
	
	/* - gallery Video Height */
	function gallery_video_height() {
		var width = $(window).width();
		var cnt_height = $(".gallery-section .content-image-block img").height();
		$(".gallery-section .content-image-block iframe").css("height", cnt_height);	
	}

	/* Event - Document Ready */
	$(document).on("ready",function() {

		/* - Contact Map* */
		if($("#map-canvas-contact").length===1){
			initialize("map-canvas-contact");
		}
		if($("#map-canvas-contact-1").length===1){
			initialize("map-canvas-contact-1");
		}
	
		/* - Gallery Video Height */
		gallery_video_height();

		/* - Client Carousel */
		if( $(".clients-carousel").length ) {
			$(".clients-carousel").owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					500:{
						items: 2
					},
					600:{
						items: 3
					},
					1000:{
						items: 4
					}
				}
			});
		}

		/* - Team Carousel */
		if( $(".team-carousel").length ) {
			$(".team-carousel").owlCarousel({
				loop: $(".team-carousel .team-content").length <= 3 ? false : true,
				margin: 0,
				nav: $(".team-carousel .team-content").length <= 3 ? false : true,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					480:{
						items: 2
					},
					600:{
						items: 3
					},
					1000:{
						items: 4
					}
				}
			});
		}

		/* - News Carousel */
		if( $(".news-carousel").length ) {
			$(".news-carousel").owlCarousel({
				loop: $(".news-carousel .type-post").length <= 1 ? false : true,
				margin: 0,
				nav: $(".news-carousel .type-post").length <= 1 ? false : true,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					768:{
						items: 2
					}
				}
			});
		}
		
		/* - Offer Carousel */
		if( $(".offer-carousel").length ) {
			$(".offer-carousel").owlCarousel({
				loop: $(".offer-carousel .offer-box").length <= 1 ? false : true,
				margin: 30,
				nav: false,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items: 1
					},
					480:{
						items: 2
					},
					600:{
						items: 2
					},
					992:{
						items: 3
					}
				}
			});
		}

		/* - Gallery Section */		
		if( $(".content-image-block").length ){
			$(".content-block-hover").magnificPopup({
				delegate: "a.zoom-in",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
				}
			});
		}

		/* - Gallery Video Popup  */
		if($(".gallery-section").length ){
			$(".gallery-section .content-image-block a.popup-video").magnificPopup({
				disableOn: 700,
				type: "iframe",
				mainClass: "mfp-fade",
				removalDelay: 160,
				preloader: false,
				fixedContentPos: false
			});
		}
		
		/* - Gallery Detail */
		if( $(".gallery-details-thumb").length ){
			$('.gallery-details-thumb').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 230,
				itemMargin: 30,
				asNavFor: '.gallery-details-full'
			});

			$('.gallery-details-full').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				sync: ".gallery-details-thumb"
			});
		}

		/* - Testimonial Slider */			
		$(".testimonial-slider").slick({
			centerMode: true,
			centerPadding: "190px",
			slidesToShow: 3,
			autoplay: false,
			responsive: [
				{
					breakpoint: 1366,
					settings: {
						centerPadding: "90px",
					}
				},
				{
					breakpoint: 1200,
					settings: {
						centerPadding: "0",
					}
				},
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: "0",
						slidesToShow: 1
					}
				}
			]
		});
		
		
	});	/* Event - Document Ready */
	
	$( window ).on("resize",function() {
		
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Gallery Video Height */
		gallery_video_height();
		
	});
	
	$(window).on("load",function() {
	
		/* - Gallery Video Height */
		gallery_video_height();
		
		/* - Gallery Section */	
		if( $(".portfolio-list").length ) {
			var $container = $(".portfolio-list");
			$container.isotope({
			  itemSelector: ".portfolio-list > li",
			  transitionDuration: "0.5s"
			});
			
			$("#filters a").on("click",function(){
				$("#filters a").removeClass("active");
				$(this).addClass("active");
				var selector = $(this).attr("data-filter");
				$container.isotope({ filter: selector });		
				return false;
			});
		}
		
		var $newdiv1 = $( ".gallery-section1 .navigation.pagination" ),
		  existingdiv1 = document.getElementById( "<div class='container'></div>" );
		$( "body .gallery-section1 .gallery-img-list" ).append( $newdiv1, [ existingdiv1 ] );
		
	});
	
})(jQuery);