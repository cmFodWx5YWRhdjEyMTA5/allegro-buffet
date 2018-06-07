$(document).ready(function() {
	
	ShowCasamentos();
	$('#btn_casamentos').addClass('selected');
	
	function ShowTodas() {
		
		if ($('#btn_todas').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_todas').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					 
				  $('#thumb-list li').removeClass('oculto');
				  $('#thumb-list li').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowCasamentos() {
		
		if ($('#btn_casamentos').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_casamentos').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.casamento').removeClass('oculto');
				  $('#thumb-list li.casamento').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowDebutantes() {
		
		if ($('#btn_debutantes').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_debutantes').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.debutante').removeClass('oculto');
				  $('#thumb-list li.debutante').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowBodas() {
		
		if ($('#btn_bodas').hasClass('selected')) {
			
		}
		
		else {
		
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_bodas').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.bodas').removeClass('oculto');
				  $('#thumb-list li.bodas').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	function ShowAniversarios() {
		
		if ($('#btn_aniversarios').hasClass('selected')) {
			
		}
		
		else {
			
		$('#submenu_thumbs a').removeClass('selected');
		$('#btn_aniversarios').addClass('selected');
		$('#thumb-list li').fadeOut(500);
		
		setTimeout(function() {					
				  $('#thumb-list li').addClass('oculto'); 
				  $('#thumb-list li.aniversario').removeClass('oculto');
				  $('#thumb-list li.aniversario').fadeIn(500);
			  }, 500);
			  
		}
	}
	
	$('#btn_todas').click(function() {
		ShowTodas();
	});
	$('#btn_casamentos').click(function() {
		ShowCasamentos();
	});
	$('#btn_debutantes').click(function() {
		ShowDebutantes();
	});
	$('#btn_bodas').click(function() {
		ShowBodas();
	});
	$('#btn_aniversarios').click(function() {
		ShowAniversarios();
	});
});