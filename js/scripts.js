$(function(){

	console.log("It's working");
	new WOW({offset: 100 }).init();
	$('.menu-toggle').on('click', function(){
	  $('.full-menu').toggleClass('full-menu-open');
	  $('li').on('click', function(){
	  	$('.full-menu').removeClass('full-menu-open');
	  })
	  $('a').smoothScroll();
	})
});