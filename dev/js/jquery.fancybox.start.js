jQuery(document).ready(function($) {

  $(".fancybox").fancybox();


  $(".actieformulier-button-band").click(function(){
  	var price = $(this).parents('.band').first().find('p.prijs').first().html();
  	var name = $(this).parents('.band').first().find('.naam-band h3').first().html();

  	$.fancybox.open($('#actie-formulier'), {
	  	afterLoad: function(current, previous){
	  		$('#field_4_8').html('Product: '+name+", "+price); //html field
	  		$('#input_4_9').val('Product: '+name+", "+price); //hidden field
	  		//console.log(current);
	  	}	
  	})
  });



});


