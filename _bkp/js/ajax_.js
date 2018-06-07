function AlinhaMenu() {
	var wh = $(window).height();
	
	var m = (wh / 2) - 25;

	var JSONObject = { 
		"MeioMenu": m
	};
	
	return JSONObject;
}

$(function LoadPage() {
	$(window).bind( 'hashchange', function(e) {
	  try {  var url = e.fragment;  }
	  catch(ee) { }

	  var hash = url+'.html';

	  var to_append = '#content';
	  
	  $('.st_loading').fadeIn(500);

	  setTimeout(function() {
		  
		  $("#content").html("");

			  $(to_append).load(hash, function() {

				setTimeout(function(to_append) {					
				  $( '.st_loading' ).fadeOut();
				}, 500);
				
			  });			  
	  
	  }, 500);
	
	});
	
});

$(document).ready(function() {
	
	$("#menu").addClass('posicaomeio');
	
	if ($("#menu").hasClass('posicaomeio')) {
		
		$("#menu").css('bottom', sizes.MeioMenu);
	
	}

	$('#menu ul li a').click(function() {
		  
		  $("#menu").animate({ bottom: '0' }, 500);
		  $("#menu").removeClass('posicaomeio');				
		  $("#menu").addClass('posicaoabaixo');
	
  	});

	$('#logo a').click(function() {
	
		var sizes = AlinhaMenu();
	
		$("#menu").removeClass('posicaoabaixo');
		$("#menu").animate({ bottom: sizes.MeioMenu }, 500);			
		$("#menu").addClass('posicaomeio');
  	});
	
	$(location).attr('href', '#home');
	LoadPage();
		
});

window.onresize = function () {
	var sizes = AlinhaMenu();
	
	if ($("#menu").hasClass('posicaomeio')) {
		
		$("#menu").css('bottom', sizes.MeioMenu);
	
	}
};