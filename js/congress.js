// JavaScript Document
$(document).ready(function(e) {
	'use strict';
  $(function(){
		$('.Congress').css({
			'background': '#339DC8'	
		})
		$('level-in').before('border-color', 'transparent transparent transparent #a5182d')
	}),
	$(function(){
		$('.level-out').waypoint(function() {
			$('.level-out').each(function(){
				var num = $(this).find('.level-in').attr('data-percent'),
					percent = $.animateNumber.numberStepFactories.append(''),
					real = $(this).find('.level-in').attr('data-number');
				$(this).find('span').animateNumber({number: real,numberStep: percent}, num * 50);
				$(this).find('.level-in').css('left', -num + '%').css('width',num+'%');
				$(this).find('.level-in').animate({'left':'0%'}, num * 50);
			});
		},
		{
			offset: '90%', 
			triggerOnce: true
		});
		
		
		$('.levels-2').waypoint(function() {
			$('.chart').easyPieChart({
				size: 140,
				scaleLength: 0,
				lineWidth: 3,
				barColor:'#888',
				trackColor:'#e4e4e4',
				animate:({ duration: 2000, enabled: true }),
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		},{offset: '90%',triggerOnce: true});
		
		$('.chart').easyPieChart({
			size: 140,
			scaleLength: 0,
			lineWidth: 3,
			barColor:'#888',
			trackColor:'#e4e4e4',
			animate:({ duration: 2000, enabled: true }),
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});	
	}),
	$(function(){
		$('body').popover({
			'html': true,
			'placement': 'top',
			'trigger': 'click',
			'container': 'body',
			'selector': '.hasPoper'
		})	
	}),
	$(function(){
		$('body').on('click', function (e) {
			$('[data-toggle="popover"]').each(function () {
					if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
							$(this).popover('hide');
					}
			});
	});	
	}),
	$(function() {
		$.getScript('https://www.iac2016.org/js/datos-speakers.js', function() {
			$.each(speakers, function(i, item) {
				/*$('[data-toggle1="popover"]').popover();*/

				var html = '<div class="astronaut col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1" title="'+speakers[i].name /*+'" data-toggle1="popover" data-placement="bottom" data-content="'*/+speakers[i].content +'">' 
				html +=  speakers[i].img + '<br><br><h2>' + speakers[i].name + '</h2><p>' + speakers[i].title + '</p>' + '</div>'
				$('#speakers').append(html);
			
				})
			})

		});
	});
