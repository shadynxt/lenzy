( function( $ ) {

"use strict";

// *** On ready *** //
$( document ).on( "ready" , function() {
	superfishMenu();
	stickyNav();
	showCartDropdown();
	bannerSlider();
	bannerSliderBG();
	optimizeBanSliderBG();
	featuredPorductsSlider();
	similarPorductsSlider();
	ourProductsTabs();
	brandsSlider();
	deadlineTimer();
	itemClickCounter();
	offersSliderSync();
	singleOfferSliderSync();
});

// *** On load *** //
$( window ).on( "load" , function() {
	WOWAnimation();
	bannerSliderBG();
});

// *** On resize *** //
$( window ).on( "resize" , function() {
	optimizeBanSliderBG();
});

// *** On scroll *** //
$( window ).on( "scroll" , function() {
	stickyNav();
	scrollTopButton();
});


 // *** jQuery noConflict *** //
var $ = jQuery.noConflict();


// *** WOW Animation *** //
function WOWAnimation() {
	var wow = new WOW({
		offset: 100,
		mobile: false
	});
	wow.init();	
}


// *** Scroll Top Button *** //
function scrollTopButton() {
	var windowScroll = $( window ).scrollTop();
	if ( $( window ).scrollTop() > 800 ) {
		$( ".scroll-top" ).addClass( "show" );
	} else {
		$( ".scroll-top" ).removeClass( "show" );
	}
}


// *** Scroll Top Button *** //
$( ".scroll-top" ).click( function(e) {
	e.preventDefault();
	console.log( "button clicked...." );
    $( "html, body" ).animate({
        scrollTop: 0
    }, 700 ); //1200 easeInOutExpo
});


// *** Mobile Menu *** //
$( "#main-menu" ).clone().appendTo( "#mobile-menu" ).removeClass().addClass( "mobile-menu" );

$( ".mobile-menu" ).superfish({
	popUpSelector: "ul, .megamenu",
	cssArrows: true,
	delay: 300,
	speed: 150,
	speedOut: 150,
	animation: { opacity : "show", height : "show" }, //  , height : "show"
	animationOut: { opacity : "hide", height: "hide" }
});

// Toggle Mobile Menu
$( ".mobile-menu-btn" ).on( "click", function(e) {
	e.preventDefault();
	$( this ).toggleClass( "is-active" );
	$( ".mobile-menu" ).slideToggle( 200 );
});


// *** Dropdown Menu *** //
function superfishMenu() {
	// Firing Superfish plugin
	$( ".sf-menu" ).superfish({
		popUpSelector: "ul",
		cssArrows: true,
		delay: 300,
		speed: 150,
		speedOut: 150,
		animation: { height : "show" }, //  , height : "show"
		animationOut: { opacity : "hide" }
	});	
}


// *** Sticky Nav *** //
function stickyNav() {
	var navBarTopDistance = $( "#nav-bar" ).offset().top,
		windowScroll = $( window ).scrollTop(),
		navBar = $( "#nav-bar" );

	if ( windowScroll > navBarTopDistance ) {
		navBar.addClass( "sticky" );
	} else {
		navBar.removeClass( "sticky" );
	}
}


// *** Cart List Dropdown *** //
function showCartDropdown() {
	var cartDropdown = $( "#cart-dropdown" );
	$( ".cart-counter" ).on( "click", function() {
		if ( cartDropdown.hasClass( "show" ) ) {
			cartDropdown.removeClass( "show" );
		} else {
			cartDropdown.addClass( "show" );
		}
	});

	$( ".cart-close" ).on( "click", function() {
		cartDropdown.removeClass( "show" );
	});

	$( "#cart-dropdown .close" ).on( "click", function(e) {
		e.preventDefault();
		$( this ).parent( "li" ).animate( { opacity : 0 } , 300 ).delay( 100 ).slideUp( 400 );
	});

}


// *** Banner Sliders *** //
function bannerSlider() {
	var bannerSlider = $( ".banner-slider > .owl-carousel" );
	bannerSlider.owlCarousel({
	    // Most important owl features
	    items : 1, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,1 ],
	    singleItem : true, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : true, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: true, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false // "fade", "backSlide", "goDown" and "fadeUp"
	});
}

// Making header slider images appearing as background, not images
function bannerSliderBG() {
	$( ".banner-slider li" ).each(function() {
		var imgSrc = $( this ).find( ".slide" ).children( "img" ).attr( "src" );
		$( this ).css( "background-image", "url('" + imgSrc + "')"  );
	});	
}

// Optimize ban slider background
function optimizeBanSliderBG() {
	var banSliderHeight = $( ".banner-slider" ).height();
	$( ".banner-slider li .slide" ).children( "img" ).css({ 
		"display" : "block",
		"height"  : banSliderHeight,
		"opacity" : 0
	});
}


// *** Featured Product Slider *** //
function featuredPorductsSlider() {
	var featuredPorductsSlider = $( ".featured-products-slider > .owl-carousel" );
	featuredPorductsSlider.owlCarousel({
	    // Most important owl features
	    items : 4, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,1 ],
	    singleItem : false, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : true, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false // "fade", "backSlide", "goDown" and "fadeUp"
	});
}


// *** Featured Product Slider *** //
function similarPorductsSlider() {
	var similarPorductsSlider = $( ".similar-products-slider > .owl-carousel" );
	similarPorductsSlider.owlCarousel({
	    // Most important owl features
	    items : 4, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,1 ],
	    singleItem : false, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : true, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false // "fade", "backSlide", "goDown" and "fadeUp"
	});
}


// *** Our Products Tabs *** //
function ourProductsTabs() {
	//When page loads...
	$( ".op-tab-content" ).hide(); //Hide all content
	$( "ul.op-tabs li:first" ).addClass( "active" ).show(); //Activate first tab
	$( ".op-tab-content:first" ).show(); //Show first tab content

	//On Click Event
	$( "ul.op-tabs li" ).click(function() {
		$( "ul.op-tabs li" ).removeClass( "active" ); //Remove any "active" class
		$( this ).addClass( "active" ); //Add "active" class to selected tab
		$( ".op-tab-content" ).stop( true, false, true ).fadeOut( 100 ); //Hide all tab content

		var activeTab = $( this ).find( "a" ).attr( "href" ); //Find the href attribute value to identify the active tab + content
		$( activeTab ).stop( true, false, true ).delay( 100 ).fadeIn( 200 ); //Fade in the active ID content
		return false;
	});
}


// *** Featured Product Slider *** //
function brandsSlider() {
	var brandsSlider = $( ".brands-slider > .owl-carousel" );
	brandsSlider.owlCarousel({
	    // Most important owl features
	    items : 4, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,1 ],
	    singleItem : false, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : false, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false // "fade", "backSlide", "goDown" and "fadeUp"
	});
}


// *** Deadline Timer *** //
function deadlineTimer() {
	var get_date = $("*[data-event-date]").data('event-date');
	if (get_date) {
	    $("*[data-event-date]").countdown({
	        date: get_date,
	        /*Change date and time in HTML data-event-date attribute */
	        format: "on"
	    },function(){
	        console.log('event ended')
	    });
	}
}


// *** Offers Slider Syncronized *** //
function offersSliderSync() {
	var sync1 = $(".offers-slider > .owl-carousel");
	var sync2 = $(".offers-thumbs-slider > .owl-carousel");

$( sync1, sync2 ).each( function() {
 
	sync1.owlCarousel({
	    // Most important owl features
	    items : 1, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,1 ],
	    singleItem : true, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : false, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    // mouseDrag: false, // Disabling sliding using mouse drag

	    //Transitions
	    transitionStyle: false, // "fade", "backSlide", "goDown" and "fadeUp"
		afterAction : syncPosition,
		responsiveRefreshRate : 200
	});
 
	sync2.owlCarousel({
	    // Most important owl features
	    items : 4, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,2 ],
	    singleItem : false, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : false, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false, // "fade", "backSlide", "goDown" and "fadeUp"
	    responsiveRefreshRate : 100,
		afterInit : function(el){
		  el.find(".owl-item").eq(0).addClass("synced");
		}
	});
 
	function syncPosition(el){
		var current = this.currentItem;
		$(".offers-thumbs-slider > .owl-carousel")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
		if($(".offers-thumbs-slider > .owl-carousel").data("owlCarousel") !== undefined){
			center(current)
		}
	}
 
	$(".offers-thumbs-slider > .owl-carousel").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync1.trigger("owl.goTo",number);
	});
 
	function center(number){
	    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
	    var num = number;
	    var found = false;
	    for(var i in sync2visible){
			if(num === sync2visible[i]){
				var found = true;
			}
	    }
 
		if(found===false){
			if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			} else {
				if(num - 1 === -1){
					num = 0;
				}
				sync2.trigger("owl.goTo", num);
			}
		} else if(num === sync2visible[sync2visible.length-1]){
			sync2.trigger("owl.goTo", sync2visible[1])
		} else if(num === sync2visible[0]){
			sync2.trigger("owl.goTo", num-1)
		}   
	}

}); // end each
} // end offersSliderSync();


// *** Single Offer Slider Syncronized *** //
function singleOfferSliderSync() {

	var sync3 = $(".single-offer-slider > .owl-carousel");
	var sync4 = $(".single-offer-thumbs-slider > .owl-carousel");

	sync3.owlCarousel({
	    // Most important owl features
	    items : 1, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,2 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,1 ],
	    singleItem : true, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : false, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false, // "fade", "backSlide", "goDown" and "fadeUp"
		afterAction : syncPosition,
		responsiveRefreshRate : 200
	});
 
	sync4.owlCarousel({
	    // Most important owl features
	    items : 4, // Items number appeared
	    itemsCustom : false, // Custom responsive widths
	    itemsDesktop : [ 1199,4 ],
	    itemsDesktopSmall : [ 979,3 ],
	    itemsTablet: [ 768,3 ],
	    itemsTabletSmall: false,
	    itemsMobile : [ 479,3 ],
	    singleItem : false, // Making only 1 item appearing

		//Basic Speeds
	    slideSpeed : 200,
	    paginationSpeed : 800, // Pagination speed
	    rewindSpeed : 1000, // Rewind speed

	    //Autoplay
	    autoPlay : false, // Integer means autoplay equal to the value. True means autoplay with 5 seconds
	    stopOnHover : false,

	    // Navigation
	    navigation : false, // Display "next" and "prev" buttons
		navigationText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
	    rewindNav : true, // Slide to first item

	    //Pagination
		pagination: false, // Show pagination
		paginationNumbers: false, // Show numbers inside pagination buttons

	    // Responsive
		responsive: true,

		//Auto height
		autoHeight: false,

	    //Transitions
	    transitionStyle: false, // "fade", "backSlide", "goDown" and "fadeUp"
	    responsiveRefreshRate : 100,
		afterInit : function(el){
		  el.find(".owl-item").eq(0).addClass("synced");
		}
	});
 
	function syncPosition(el){
		var current = this.currentItem;
		sync4
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
		if(sync4.data("owlCarousel") !== undefined){
			center(current)
		}
	}
 
	sync4.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync3.trigger("owl.goTo",number);
	});
 
	function center(number){
	    var sync4visible = sync4.data("owlCarousel").owl.visibleItems;
	    var num = number;
	    var found = false;
	    for(var i in sync4visible){
			if(num === sync4visible[i]){
				var found = true;
			}
	    }
 
		if(found===false){
			if(num>sync4visible[sync4visible.length-1]){
				sync4.trigger("owl.goTo", num - sync4visible.length+2)
			} else {
				if(num - 1 === -1){
					num = 0;
				}
				sync4.trigger("owl.goTo", num);
			}
		} else if(num === sync4visible[sync4visible.length-1]){
			sync4.trigger("owl.goTo", sync4visible[1])
		} else if(num === sync4visible[0]){
			sync4.trigger("owl.goTo", num-1)
		}   
	}

} // end singleOfferSliderSync();


// *** Item Click Increase & Decrease Counter *** //
function itemClickCounter() {
	jQuery.fn.allowDigitsOnly = function(){
	return this.each(function(){
	$(this).keydown(function(e){
	var key = e.charCode || e.keyCode || 0;
	return (
	key == 8 || 
	key == 9 ||
	key == 46 ||
	key == 110 ||
	key == 190 ||
	(key >= 35 && key <= 40) ||
	(key >= 48 && key <= 57) ||
	(key >= 96 && key <= 105));
	});
	});
	};

	var inputField = $( ".add-item-counter input" );
	inputField.allowDigitsOnly();

	$( ".increase-btn"  ).click( function( e ) {
		e.preventDefault();
		var inputField = $( this ).prev( "input" );
		var currentInputValue = parseInt( inputField.val() );
		inputField.val( currentInputValue + 1 );
	});

	$( ".decrease-btn" ).click( function( e ) { 
		e.preventDefault();
		var inputField = $( this ).next( "input" );
		var currentInputValue = parseInt( inputField.val() );
		inputField.val( currentInputValue - 1  )

		if ( currentInputValue < 1 ) { inputField.val( "0" ) }
	});
}


// *** Single Offer Slider *** //
$( ".offer-thumbs li img" ).click(function(){
	var link =$(this).attr('src');
	$(this).closest('.single-offer-slider').find('.prev').html('<img src="'+link+'" />');

});

} )( jQuery );


