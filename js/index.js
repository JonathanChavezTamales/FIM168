$(document).ready(function(e) {
  	$(function(){
		//090F1F
		$('.importantDates').TimeCircles({
				'animation': 'smooth',
				'bg_width': 0.2,
				'fg_width': 0.05,
				'circle_bg_color': '#fff',
				'use_background': true,
				'text_size': 0.05,
				'time': {
						'Days': {
								'text': 'Days',
								'color': '#339DC8',
								'show': true
						},
						'Hours': {
								'text': 'Hours',
								'color': '#339DC8',
								'show': true
						},
						'Minutes': {
								'text': 'Minutes',
								'color': '#339DC8',
								'show': true
						},
						'Seconds': {
								'text': 'Seconds',
								'color': '#339DC8',
								'show': true
						}
				}
		})
	}),
	$(function(){
		var deadLine = new Date(2016, 08, 27)
		$('#countdown').countdown({
			timestamp	: deadLine
		})
	}),
	$(function(){
		$('#popupBrokerage').modal({
			show: true	
		})
	})
});