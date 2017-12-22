(function($){
	
			
	$(document).ready(function (){
		
		$('body').on('click', 'button.view-grid', function(){
			var portfolio = $(this).data();
			
			$(this).parent().siblings().removeClass('nav-item-open');
			$('.logo-tag').attr('class', 'logo-tag').text('');
			
			if ($(this).parent().hasClass('nav-item-open')) {
			$(this).parent().removeClass('nav-item-open').parents('.hp-nav').removeClass('nav-open');	
			} else {
			$(this).parent().addClass('nav-item-open').parents('.hp-nav').addClass('nav-open');	
				if (portfolio.title == 'web-design') {
				$('.logo-tag').addClass('txt-green').text('Web Design');	
				}
				if (portfolio.title == 'illustration') {
				$('.logo-tag').addClass('txt-blue').text('Illustration');	
				}
				if (portfolio.title == 'graphic-design') {
				$('.logo-tag').addClass('txt-purple').text('Graphic Design');	
				}
				if (portfolio.title == 'magazine-design') {
				$('.logo-tag').addClass('txt-orange').text('Magazine Design');	
				}
				if (portfolio.title == 'motion-design') {
				$('.logo-tag').addClass('txt-yellow').text('Motion Design');	
				}
			}
			
		return false;
			
		});		
		
		$('body').on('click', 'button#strip-nav-btn', function(){
						
		$(this).toggleClass('nav-closed nav-open');
		$('.strip-nav').toggleClass('nav-closed nav-open');
		$('main').toggleClass('nav-closed nav-open');
		
		return false;
		});	
		
		$('body').on('click', 'button.view-img', function(){
			
			$(this).parent().siblings().removeClass('img-active');
			$(this).parent().toggleClass('img-active');
			
			return false;
		});	
		
		$('body').on('click', '.info-nav > .nav > a', function(){
			
			var section = $(this).attr('href');
			
			$('.sub-page').removeClass('active-section');
			$(section).addClass('active-section');
			$(this).siblings().removeClass('active');
			$(this).addClass('active');
			
			return false;
		});					     	     

	});
	
	$(window).on("resize", function(e){


	});
	
	$(window).load(function(e){
	
		
	});
	
	$(window).scroll(function(e){
    		
	});
	
	
})(window.jQuery);