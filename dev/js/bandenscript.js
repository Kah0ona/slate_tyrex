jQuery(document).ready(function($){
	var merken = $('.merk-lijst-beschrijvingen.bandenmerken'); //todo change me to the correct value
	var soorten = $('.merk-lijst-beschrijvingen.bandensoorten');
	
	//bij laden pagina hiden
	merken.hide();
	soorten.hide(); 

	function copyToPlaceholder(element, targetDiv){
		$(targetDiv).html('');
		var copy = element.clone(); // ???
		copy.removeClass();
		copy.addClass('merk');
		copy.addClass('featured');
		copy.children('.merk-beschrijving-long').show();
		$(targetDiv).append(copy);
	}


	$('.merken-tabel td a').hover(function(event){
		event.preventDefault();
		var clicked =  $(event.currentTarget);
		if(clicked.hasClass('featured')) {
			return;
		}

		var target = clicked.attr('data-target');
		merken.show(); //toon merken grid
		soorten.hide();

		copyToPlaceholder($('.'+target), '.banden_featured_placeholder');
	});

	$('.soorten-tabel td a').hover(function(event){
		event.preventDefault();
		var clicked =  $(event.currentTarget);
		if(clicked.hasClass('featured')) {
			return;
		}

		var target = clicked.attr('data-target');
		merken.hide(); 
		soorten.show();

		copyToPlaceholder($('.'+target), '.banden_featured_placeholder');
	});




	$('.bandenmerken .merk').click(function(event){
		event.preventDefault();
		var clicked =  $(event.currentTarget);
		if(clicked.hasClass('featured')) {
			return;
		}

		merken.show(); //toon merken grid
		soorten.hide();

		copyToPlaceholder(clicked,'.banden_featured_placeholder');

		//auto-scroll to the placeholder div
	    $('html,body').animate({
		    scrollTop: $('.banden_featured_placeholder').offset().top - 10
		},'fast');
	});

	$('.bandensoorten .merk').click(function(event){
		event.preventDefault();
		var clicked =  $(event.currentTarget);
		if(clicked.hasClass('featured')) {
			return;
		}

		merken.hide();
		soorten.show();

		copyToPlaceholder(clicked,'.banden_featured_placeholder');

		//auto-scroll to the placeholder div
	    $('html,body').animate({
		    scrollTop: $('.banden_featured_placeholder').offset().top - 10
		},'fast');
	});

});
