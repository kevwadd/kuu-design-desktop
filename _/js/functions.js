(function($){
		
	$(document).ready(function (){
		
		$('body').on('click','#sub-view-links > a', function(e){
			
			var col_class = $(this).attr('class');
			var txtId = $(this).attr('href');
			
			$('#sub-view').addClass(col_class);
			$(txtId).removeClass('hidden').addClass('active');
			
			$('body').removeClass('main-visible').addClass('sub-visible');
			window.scrollTo(0, 0);
			
			$('#outer-wrap').animate({'left': '-100%'}, 300, function(){
			
				$('#outer-wrap').removeAttr('style').removeClass('main-visible').addClass('sub-visible');	
				
			});
			
/*
			$('#outer-wrap').removeClass('main-visible').addClass('sub-visible');
*/
			
			
		return false;
		
		});
		
		$('body').on('click','.sub-view-back-btn', function(e){
			
			$('body').removeClass('sub-visible').addClass('main-visible');
			
			$('#outer-wrap').animate({'left': '100%'}, 300, function(){
			
				$('#outer-wrap').removeAttr('style').removeClass('sub-visible').addClass('main-visible');	
				
				$('.sub-view-content').removeClass('active').addClass('hidden');
							
				if ($('#sub-view').is('.green-grad, .blue-grad, .orange-grad, .purple-grad')) {
					$('#sub-view').removeClass('green-grad blue-grad orange-grad purple-grad');
				}
				
			});

				
		return false;
		
		});
		
		$('body').on('click','button#menu-btn', function(e){
			
			
			$('body').removeClass('main-visible').addClass('nav-visible');
			
			$('#outer-wrap').animate({'top': '100%'}, 300, function(){
			
				$('#outer-wrap').removeAttr('style').removeClass('main-visible').addClass('nav-visible');
				
			});
				
			return false;
		
		});
		
		$('body').on('click','button#close-nav', function(e){
			$('body').removeClass('nav-visible').addClass('main-visible');
			
			$('#outer-wrap').animate({'top': '-100%'}, 300, function(){
			
				$('#outer-wrap').removeAttr('style').removeClass('nav-visible').addClass('main-visible');
				
			});

				
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