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
		
		$('body').on('click','a.img-link', function(e){
			
			var w = parseInt($(this).attr('data-img-width'));
			var h = parseInt($(this).attr('data-img-height'));
			var img_src = $(this).attr('href');
			var img_meta = $(this).parent().find('.img-meta').html().trim();
			var btn = '<button class="close-meta"><span class="sr-only">Close information</span><i class="fa fa-times"></i></button>';
			
			$('.img-viewer').find('.img-holder').empty();
			$('.img-viewer').find('.img-meta').removeClass('open').addClass('closed').empty();
			$('.img-viewer').find('button.info-view-btn').removeClass('down').addClass('up hidden');
			
			//console.log(img_meta);
			
			if (w > h) {
				
				if ($('.img-viewer-tall').hasClass('open')) {
				$('.img-viewer-tall').removeClass('open').addClass('closed');
				}	
				if (img_meta != "") {
				$('.img-viewer-wide').find('.img-meta').removeClass('hidden').append('<div class="img-meta-inner">'+img_meta+btn+'</div>');
				$('.img-viewer-wide').find('.info-view-btn').removeClass('hidden');
				} else {
				$('.img-viewer-wide').find('.img-meta').addClass('hidden');	
				}
				$('.img-viewer-wide').find('.img-holder').prepend('<img src="'+img_src+'" />');
				$('.img-viewer-wide').removeClass('closed').addClass('open');	
			}
			
			if (h > w) {
				if ($('.img-viewer-wide').hasClass('open')) {
				$('.img-viewer-wide').removeClass('open').addClass('closed');	
				}
				if (img_meta != "") {
				$('.img-viewer-tall').find('.img-meta').removeClass('hidden').append('<div class="img-meta-inner">'+img_meta+btn+'</div>');
				$('.img-viewer-tall').find('.info-view-btn').removeClass('hidden');
				} else {
				$('.img-viewer-tall').find('.img-meta').addClass('hidden');		
				}
				$('.img-viewer-tall').find('.img-holder').prepend('<img src="'+img_src+'" />');
				$('.img-viewer-tall').removeClass('closed').addClass('open');	
			}
				
			return false;
		
		});
		
		$('body').on('click','button.close-meta', function(e){

			$(this).parents('.img-meta').removeClass('open').addClass('closed');
			$(this).parents('.img-viewer').find('button.info-view-btn').removeClass('down').addClass('up');	
			return false;
		
		});
		
		$('body').on('click','button.info-view-btn', function(e){

			$(this).removeClass('up').addClass('down');
			$(this).parent().find('.img-meta').removeClass('closed').addClass('open');	
			return false;
		
		});
		
		$('body').on('click','.img-viewer', function(e){

			$(this).removeClass('open').addClass('closed');	
				
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