$(document).ready(function() {
	
	ShowWorkshop();
	$('#btn_workshop').addClass('selected');
	
	function ShowWorkshop() {
		
		if ($('#btn_workshop').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_workshop').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					 
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.workshop').removeClass('oculto');
				  $('#thumb-list li.workshop').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowLancamentos() {
		
		if ($('#btn_lancamentos').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_lancamentos').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					 
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.lancamentos').removeClass('oculto');
				  $('#thumb-list li.lancamentos').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowSeminarios() {
		
		if ($('#btn_seminarios').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_seminarios').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.seminarios').removeClass('oculto');
				  $('#thumb-list li.seminarios').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowPalestras() {
		
		if ($('#btn_palestras').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_palestras').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.palestras').removeClass('oculto');
				  $('#thumb-list li.palestras').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowConfra() {
		
		if ($('#btn_confra').hasClass('selected')) {
			
		}
		
		else {
		
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_confra').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.confra').removeClass('oculto');
				  $('#thumb-list li.confra').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowHappy() {
		
		if ($('#btn_happy').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_happy').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.happy').removeClass('oculto');
				  $('#thumb-list li.happy').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowBrunch() {
		
		if ($('#btn_brunch').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_brunch').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.brunch').removeClass('oculto');
				  $('#thumb-list li.brunch').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	$('#btn_workshop').click(function() {
		ShowWorkshop();
	});
	$('#btn_lancamentos').click(function() {
		ShowLancamentos();
	});
	$('#btn_seminarios').click(function() {
		ShowSeminarios();
	});
	$('#btn_palestras').click(function() {
		ShowPalestras();
	});
	$('#btn_confra').click(function() {
		ShowConfra();
	});
	$('#btn_happy').click(function() {
		ShowHappy();
	});
	$('#btn_brunch').click(function() {
		ShowBrunch();
	});
});