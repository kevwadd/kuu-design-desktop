(function($){
	
			
	$(document).ready(function (){
		
		$('body').on('click', 'button.view-grid', function(){
			var portfolio = $(this).text();
			
			$(this).parent().siblings().removeClass('nav-item-open');
			$('.masthead > a').attr('class', '');
			
			if ($(this).parent().hasClass('nav-item-open')) {
			$(this).parent().removeClass('nav-item-open').parents('.hp-nav').removeClass('nav-open');	
			} else {
			$(this).parent().addClass('nav-item-open').parents('.hp-nav').addClass('nav-open');	
				if (portfolio == 'Web Design') {
				$('.masthead > a').addClass('web-active');	
				}
				if (portfolio == 'Illustration') {
				$('.masthead > a').addClass('illustration-active');	
				}
				if (portfolio == 'Graphic Design') {
				$('.masthead > a').addClass('graphics-active');	
				}
				if (portfolio == 'Magazine Design') {
				$('.masthead > a').addClass('magazines-active');	
				}
				if (portfolio == 'Animation & Video') {
				$('.masthead > a').addClass('videos-active');	
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

	});
	
	$(window).on("resize", function(e){


	});
	
	$(window).load(function(e){
	
		
	});
	
	$(window).scroll(function(e){
    		
	});
	
	
})(window.jQuery);