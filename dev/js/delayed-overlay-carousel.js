//script dat in de gaten houdt wanneer er een div verschijnt, en dan gaat reageren op basis
// van wat er in die div staat.
// Specifiek: hij tovert een image tevoorschijn op specifieke plek
//


jQuery(document).arrive(".arrived", function() {
	var $ = jQuery;
	var self = this;

	var e = $(this);
	var src   = e.data('src');
	var delay = e.data('delay');
	var top   = e.data('top');
	var left  = e.data('left');
	var height  = e.data('height');
	var basesrc = e.data('basesrc');
	var counter = e.data('counter');

	var img=$('<img class="overlayimg" src="'+src+'" style="display:none; position:absolute; z-index: 9999;height: '+
					height+'; top: '+top+'; left: '+left+';" />');

	console.log('img[src="'+basesrc+'?counter='+counter+'"]');

	var toAppendTo = $('img[src="'+basesrc+'?counter='+counter+'"]').first().parent();	
//	console.log(toAppendTo);
//	console.log(toAppendTo.attr('style'));
	toAppendTo.append(img);

	setTimeout(function(){
		img.fadeIn(300);
		setTimeout(function(){
			img.fadeOut(300);
		}, 7000-(delay+600));
	}, delay);

	



});

jQuery(document).leave(".arrived", function() {
	$('.overlayimg').hide();

});
jQuery(document).ready(function($){
	$('#myDiv-fluidwidth div, #myDiv-fluidwidth img').click(function(){
		console.log('click')
		$('.overlayimg').hide();
	});
});

