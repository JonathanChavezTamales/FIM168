$(document).ready(function(){
	$(function(){
		var itsMobile = jQuery.browser.mobile;
		if(itsMobile === true){
			$('html').addClass('mobile')
		}
	}),
	$(function(){
		var mobile = $('html').hasClass('mobile')
		
		if(mobile){
			$('video').remove()
			
			$('body').css({
				'background': 'url(images/bg.jpg)'
			})
			
			$('#map').css({
				'width': '90' + '%',
				'margin': '0px auto'
			})
			
			$('#logos .one').addClass('col-xs-2')
			$('#logos .two').addClass('col-xs-2')
			$('#logos .three').addClass('col-xs-2')
			$('#logos .four').addClass('col-xs-2')
			$('#logos .five').addClass('col-xs-2')
			$('#logos .six').addClass('col-xs-2')
		} else { 
		}	
	}),
$(function () {
/*			var display = $(window),
					displayHeight = display.height(),
					displayWidth = display.width();
	
			display.resize(function () {
					$('video').height(displayHeight)
			})
			display.trigger('resize')*/
	}),
	$(function(){
		new WOW(
		{
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 120,
			mobile: false,
			live: true
		}).init();
	}),
	$('nav ul li a').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
		  var $target = $(this.hash);
		  $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
		  if ($target.length) {
			var targetOffset = $target.offset().top;
			$('html,body')
			.animate({scrollTop: targetOffset}, 1000);
		   return false;
		  }
		} 
	  }),
	 $(function(){
			var h = $(window),
				top = h.height();
			h.resize(function() {
				$('#bg').css({
					'height': top
				});
			});
			h.trigger('resize');
	 }),
	$(function(){
		$('nav').affix({
		  offset: {
			top: 660
		  }
		})
		$('[data-toggle="tooltip"]').tooltip()
	}),
	$(function(){
		$('#AbstractsModal').modal({
			'show': true,
			'keyboard': false,
			'backdrop': 'static'
		})
	}),
	$('.fun-number').each(function(){
		var thisNo = $(this).text();
		$(this).animateNumber({number: thisNo},6000);
	}),
	$(function(){
		$('#popupBrokerage').modal({
			show: true	
		})
	}),
    $(function () {
      var v = $(window),
          w = v.width(),
          h = 150,
          container = $('#f-program')

      container.addClass('hidden')

      v.scroll(function () {
          var scroll = v.scrollTop()

          if (scroll >= h) {
              container.removeClass('hidden').addClass('show')
          } else {
              container.removeClass('show').addClass('hidden')
          }
      })
  });		
});