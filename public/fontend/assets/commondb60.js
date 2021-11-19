jQuery(document).ready(function() {
	"use strict";
	jQuery('.toggle').click(function() {
		if (jQuery('.submenu').is(":hidden"))
		{
			jQuery('.submenu').slideDown("fast");
		} else {
			jQuery('.submenu').slideUp("fast");
		}
		return false;
	});
	$('.open-close').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('li.level0').find('ul.level0').stop().slideToggle();
		$(this).toggleClass('active')
		return false;
	});
	$('.open-close-1').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('li.level1').find('ul.level1').stop().slideToggle();
		$(this).toggleClass('active')
		return false;
	});
	
	$(window).scroll(function () {
		if ($(window).scrollTop() != 0) {
			$('#back-top').fadeIn();

		} else {

			$('#back-top').fadeOut();

		}

	});

	$('#back-top').click(function () {
		$('html, body').animate({ scrollTop: 0 }, 500);

	});
	
	$('.toggle-header').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('.header-menu').find('.header-top-menu').stop().slideToggle();
		return false;
	});
	
	$('.btn-search').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('.links-search').find('.search-box').stop().slideToggle();
		return false;
	});
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('#site-nav').addClass("sticky");
		}
		else{
			$('#site-nav').removeClass("sticky");
		}
	});
	jQuery("#ow-slider").owlCarousel({
		autoPlay: 5000, //Set AutoPlay to 3 seconds
		pagination: false,
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		singleItem: true
	});
	
	jQuery("#home-project").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1024,3], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#sidebar-coll").owlCarousel({
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1024,1], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		autoPlay: true,
		navigation : false,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#featured-product-slider .slider-items").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});


	jQuery("#bag-seller-slider .slider-items").owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1024,3], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#bag-seller-slider1 .slider-items").owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1024,3], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});

	jQuery("#featured-slider .slider-items").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#recommend-slider .slider-items").owlCarousel({
		items : 6, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#brand-logo-slider .slider-items").owlCarousel({
		autoplay : true,
		items : 6, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false			
	});
	jQuery("#category-desc-slider .slider-items").owlCarousel({
		autoplay : true,
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1024,1], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false			
	});
	jQuery("#more-views-slider .slider-items").owlCarousel({
		autoplay : true,
		items : 5, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#related-products-slider .slider-items").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#upsell-products-slider").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	jQuery("#more-views-slider .slider-items").owlCarousel({
		autoplay : true,
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [320,1],
		navigation : true,
		navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
		slideSpeed : 500,
		pagination : false
	});
	

});


function slideEffectAjax() {
	var ww = $(window).width();
	if (ww > 960){
		$('.top-cart-contain').mouseenter(function() {
			$(this).find(".top-cart-content").stop(true, true).slideDown();
		});

		$('.top-cart-contain').mouseleave(function() {
			$(this).find(".top-cart-content").stop(true, true).slideUp();
		});
	} else {
		$('.top-cart-contain').click(function(){
			$(this).find(".top-cart-content").toggle(300);
		});
	}
}


$(document).ready(function(){
	slideEffectAjax();
});


/* top search */

$('.search_text').click(function(){
	$(this).next().slideToggle(200);
	$('.list_search').show();
})


$('.list_search .search_item').on('click', function (e) {
	$('.list_search').hide();

	var optionSelected = $(this);

	/*
  var id = optionSelected.attr('data-coll-id');
  var handle = optionSelected.attr('data-coll-handle');
  var coll_name = optionSelected.attr('data-coll-name');
  */

	var title = optionSelected.text();
	//var filter = '(collectionid:product' + (id == 0 ? '>=0' : ('=' + id)) + ')';


	//console.log(coll_name);
	$('.search_text').text(title);

	/*
  $('.ultimate-search .collection_id').val(filter);
  $('.ultimate-search .collection_handle').val(handle);
  $('.ultimate-search .collection_name').val(coll_name);
  */

	$(".search-text").focus();
	optionSelected.addClass('active').siblings().removeClass('active');
	//console.log($('.kd_search_text').innerWidth());


	//$('.list_search').slideToggle(0);

	/*
  sessionStorage.setItem('last_search', JSON.stringify({
    title: title,
    handle: handle,
    filter: filter,
    name: coll_name
  }));
  */  
});


$('.header_search form button').click(function(e) {
	e.preventDefault();
	searchCollection();
	setSearchStorage('.header_search form');
});

$('#mb_search').click(function(){
	$('.mb_header_search').slideToggle('fast');
});

$('.fi-title.drop-down').click(function(){
	$(this).toggleClass('opentab');
});



function searchCollection(e) {
	var collectionId = $('.list_search .search_item.active').attr('data-coll-id');
	var searchVal = $('.header_search input[type="search"]').val();
	console.log(searchVal);


	var url = '';
	if(collectionId == 0) {
		url = '/search?q='+ searchVal;
	}
	else {
		url = '/search?q='+ searchVal;
	/*
		if(searchVal != '') {
		  url = '/search?type=product&q=' + searchVal + '&filter=(collectionid:product=' + collectionId + ')';
		}
		else {
		  url = '/search?type=product&q=filter=(collectionid:product=' + collectionId + ')';
		}
    */
	}
	window.location=url;
}


/*** Search Storage ****/


function setSearchStorage(form_id) {
	var seach_input = $(form_id).find('.search-text').val();
	var search_collection = $(form_id).find('.list_search .search_item.active').attr('data-coll-id');
	sessionStorage.setItem('search_input', seach_input);
	sessionStorage.setItem('search_collection', search_collection);
}
function getSearchStorage(form_id) {
	var search_input_st = ''; // sessionStorage.getItem('search_input');
	var search_collection_st = ''; // sessionStorage.getItem('search_collection');
	if(sessionStorage.search_input != '') {
		search_input_st = sessionStorage.search_input;
	}
	if(sessionStorage.search_collection != '') {
		search_collection_st = sessionStorage.search_collection;
	}
	$(form_id).find('.search-text').val(search_input_st);
	$(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').addClass('active').siblings().removeClass('active');
	var search_key = $(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').text();
	if(search_key != ''){
		$(form_id).find('.collection-selector .search_text').text(search_key);
	}
	//$(form_id).find('.search_collection option[value="'+search_collection_st+'"]').prop('selected', true);
}
function resetSearchStorage() {
	sessionStorage.removeItem('search_input');
	sessionStorage.removeItem('search_collection');
}
$(window).load(function() {
	getSearchStorage('.header_search form');
	resetSearchStorage();
});