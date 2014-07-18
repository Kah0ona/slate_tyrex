jQuery(document).ready(function($){
	var merken = $('#brands_target'); //todo change me to the correct value
	var soorten = $('#soorten_target');
	
	//bij laden pagina hiden
	merken.hide();
	soorten.hide(); 

	function copyToPlaceholder(element, targetDiv){
		var copy = element.copy(); // ???
		$(targetDiv).append(copy);
	}


	$('.merken_tabel td').click(function(){
		var clicked =  $(this.currentTarget).attr('id');
		merken.show(); //toon merken grid
		soorten.hide();
		//clear het placeholder div
		placeholder.html('');
		
		//het aangeklikte merk dient bovenaan uitgelicht te worden door te kopieren naar de placeholder

		//copy het bijbehorende target merk naar de placeholder div, en toon ook de extra text die erbij zit
		copyToPlaceHolder($('#'+clicked), '#banden_placeholder');
	});

});
