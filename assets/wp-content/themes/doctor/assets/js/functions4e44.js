/*------------------------------------
	Theme Name: Doctor
	Start Date : 
	End Date : 
	Last change: 
	Version: 1.0
	Assigned to:
	Primary use:
---------------------------------------*/
/*	

	## Functions
		- Menu Switch
		- Menu Switch Admin Option
		- Menu Triangle
		- Responsive Caret
		- Expand Panel Resize
		- Sticky Menu
		- Hover Touch Work For Ipad
		
	## Document Ready
		- Scrolling Navigation
		- Set Sticky Menu
		- Responsive Caret
		- Expand Panel
		- Collapse Panel
		- Switch buttons
		- Remove p empty tag for Shortcode
		- Select Box
		- Appointment Form
		- Color Switcher
		- Cookies
		- View Box
		- Menu Switch
		- Menu Triangle
		- Search
		- DatePicker
		
	## Event: Window Scrol
	## Event: Window Resize
	## Event: Window Load
	
*/

(function($) {

	"use strict"
	
	/* - Menu Switch */
	function menu_switch(){
		var width = $(window).width();
		if( width > 991 ) {
			$(".menu-switch > a").on("click", function() {
				$(".ownavigation .navbar-nav").toggleClass("menu-open")
			});
		} else {
			$(".ownavigation .navbar-nav").removeClass("menu-open");
		}
	}
	
	/* - Menu Switch Admin Option */
	function menu_switch_admin(){
		var width = $(window).width();
		if( width > 991 ) {
			$(".menu-switch > a").on("click", function() {
				$(".header_s10").toggleClass("menu_hide")
			});
		} else {
			$(".header_s10").removeClass("menu-show");
		}
	}
	
	/* - Menu Triangle */
	function menu_triangle() {
		var width = $(window).width();
		if( width > 991 ) {
			$( ".header_s16 .ownavigation .nav > li" ).each(function (i){
				var menu_width;
				menu_width = $(".header_s16 .ownavigation .nav > li").eq(i).width();
				var border_width = menu_width / 2;
				$(".header_s16 .ownavigation .nav > li > a").eq(i).find(' > span').remove();
				$(".header_s16 .ownavigation .nav > li > a").eq(i).append("<span class='left-brd'></span>","<span class='right-brd'></span>");
				$(".header_s16 .ownavigation .nav > li > a .left-brd").eq(i).css("border-right-width",border_width);
				$(".header_s16 .ownavigation .nav > li > a .right-brd").eq(i).css("border-left-width",border_width);
			});
		} else {
			$( ".header_s16 .ownavigation .nav > li" ).each(function (i){
				$(".header_s16 .ownavigation .nav > li > a").eq(i).find(' > span').remove();
			});
		}
	}

	/* - Responsive Caret */
	function menu_dropdown_open(){
		var width = $(window).width();
		if( width > 991 ) {
			if($(".ownavigation .nav li.ddl-active").length ) {
				$(".ownavigation .nav > li").removeClass("ddl-active");
				$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
			}
		} else {
			$(".ownavigation .nav li .dropdown-menu").removeAttr("style");
		}
	}
	
	/* - Expand Panel Resize */
	function panel_resize(){
		var width = $(window).width();
		if( width > 991 ) {
			if($(".header_s #slidepanel").length ) {
				$(".header_s #slidepanel").removeAttr("style");
			}
		}
	}
	
	/* - Sticky Menu */
	function sticky_menu() {
		var menu_scroll = $('header[class*="header_s"]').offset().top;
		var scroll_top = $(window).scrollTop();
		
		if ( scroll_top > menu_scroll ) {
			$(".header_s .ownavigation").addClass("navbar-fixed-top animated fadeInDown");
		} else {
			$(".header_s .ownavigation").removeClass("navbar-fixed-top animated fadeInDown"); 
		}
	}
	
	/* - Hover Touch Work For Ipad */
	$('.other-services').on('click touchend', function(e) {
		var el = $(this);
	})
	
	$('.extra-services').on('click touchend', function(e) {
		var el = $(this);
	})
	
	$('.contact-us2').on('click touchend', function(e) {
		var el = $(this);
	})
	
	$('.services-section .medical-box:hover i').on('click touchend', function(e) {
		var el = $(this);
	})

	/* ## Document Ready */
	$(document).on("ready",function() {

		/* - Scrolling Navigation */
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Set Sticky Menu */
		if( $(".menusticky .ownavigation").length ) {
			sticky_menu();
		}

		/* - Responsive Caret */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		/* - Expand Panel */
		$("#slideit").on ("click", function() {
			$("#slidepanel").slideDown(1000);
			$("html").animate({ scrollTop: 0 }, 1000);
		});	

		/* - Collapse Panel */
		$("#closeit").on("click", function() {
			$("#slidepanel").slideUp("slow");
			$("html").animate({ scrollTop: 0 }, 1000);
		});	
		
		/* - Switch buttons */
		$("#toggle a").on("click", function() {
			$("#toggle a").toggle();
		});
		
		/* - Remove p empty tag for Shortcode */
		$( "p" ).each(function() {
			var $this = $( this );
			if( $this.html().replace(/\s|&nbsp;/g, '').length == 0) {
				$this.remove();
			}
		});
		
		/* - Select Box */
		$( "select:not(.wpcf7-form-control)" ).wrap( "<div class='select_box'></div>" );
		
		
		/* - Appointment Form */
		$( ".appoinment-form .wpcf7-form .wpcf7-submit" ).wrap( "<div class='appointment_submit_icon'></div>" );
		
		/* - Color Switcher */
		if( $('#choose_style').length ) {

			 $("#default" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/default.css");
				return false;
			});

			$("#blue" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/blue.css");
				return false;
			});
			
			$("#green" ).on( 'click' , function()
			{
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/green.css");
				return false;
			});

			$("#coral" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/coral.css");
				return false;
			});

			$("#cyan" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/cyan.css");
				return false;
			});

			$("#eggplant" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/eggplant.css");
				return false;
			});

			$("#pink" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/pink.css");
				return false;
			});

			$("#slateblue" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/slateblue.css");
				return false;
			});
			
			$("#gold" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/gold.css");
				return false;
			});
			$("#red" ).on( 'click' , function() {
				$("#doctor-theme-color-css" ).attr("href", templateUrl + "/assets/css/color-schemes/red.css");
				return false;
			});
			
			$(".picker_close").on("click", function() {
				$("#choose_style").toggleClass("position");
			});
		}
		
		$(".color-switcher-block li a").on("click", function() {
			$(".color-switcher-block li").removeClass("active");
			$(this).parent().addClass("active");
		});
		
		/* - Cookies */
		var layout = $.cookie('choose-switcher-box > ul li');
		if (!($.cookie('choose-switcher-box > ul li'))) {
			$.cookie('choose-switcher-box > ul li', 'full-view', 365);
			layout = $.cookie('choose-switcher-box > ul li');
			$('#choose_style .choose-switcher-box > ul li a[id="full_view"]');
			
		} else {
			if (layout=="box-view" || $('select#doctor_cf_bodylayout').val() == 'pagebox' ) {
				$("body").addClass("boxed-layout");
			}
			else {
				$("body").removeClass("boxed-layout");
			};
		};
		
		/* - View Box */
		$("#full_view").on("click", function(e) {
			e.preventDefault(); 
			$("body").removeClass("boxed-layout");
			$.cookie('choose-switcher-box > ul li', 'full-view', 365);
			document.location.reload();
		});
		
		$("#box_view").on("click", function(e) {
			e.preventDefault(); 
			$("body").addClass("boxed-layout");
			$.cookie('choose-switcher-box > ul li', 'box-view', 365);
			document.location.reload();
		});
		
		/* - Menu Switch */
		if($(".menu-switch").length){
			menu_switch();
		}
		if($(".menu-switch").length){
			menu_switch_admin();
		}
		
		/* - Menu Triangle */
		menu_triangle();
		panel_resize();
		
		/* - Search */
		if($(".search-box").length){
			$("#search").on("click", function(){
				$(".search-box").addClass("active")
			});
			$(".search-box > span").on("click", function(){
				$(".search-box").removeClass("active")
			});
		}
		
		/* - DatePicker */
		if ( $('[type="date"]').prop('type') != 'date' ) {
			$('[type="date"]').datepicker();
		}
		
	});	/* - Document Ready /- */
	
	/* ## Event: Window Scroll */
	$(window).on("scroll",function() {

		if( $(".menusticky .ownavigation").length ) {
			sticky_menu();
		}
	});
	
	/* ## Event: Window Resize */
	$( window ).on("resize",function() {
		
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* - Expand Panel Resize */
		panel_resize();
		
		/* - Menu Switch */
		if($(".menu-switch").length){
			menu_switch();
		}
		if($(".menu-switch").length){
			menu_switch_admin();
		}
		
		/* - Menu Triangle */
		menu_triangle();
		
	});
	
	/* ## Event: Window Load */
	$(window).on("load",function() {
		/* - Site Loader* */
		if ( !$("html").is(".ie6, .ie7, .ie8") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
	});

})(jQuery);