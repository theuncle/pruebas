//Oscurecer navbar en scroll
$(document).ready(function(){
	var scrollTop = 0;
	$(window).scroll(function(){
		scrollTop = $(window).scrollTop();
		$('.counter').html(scrollTop);   
		if (scrollTop >= 50) {
			$('.navbar-default').addClass('nav-transparency');
		} else if (scrollTop < 50) {
			$('.navbar-default').removeClass('nav-transparency');
		}     
	});   
});