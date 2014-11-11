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

	var img=$('<img class="overlayimg" src="'+src+'" style="display:none; position:absolute; z-index: 9999; top: '+top+'; left: '+left+';" />');
	$('#myDiv-fluidwidth').append(img);

	setTimeout(function(){
		img.fadeIn(300);
		setTimeout(function(){
			img.fadeOut(300);
		}, 7000-(delay+600));
	}, delay);


});

