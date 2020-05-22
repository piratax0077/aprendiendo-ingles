$(document).ready(function(){
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
$( "#accordion" ).accordion();
$( "#tabs" ).tabs();

var caja = $("#caja");

$("#mostrar").hide();

$("#mostrar").click(function(){
		$(this).hide();
		$("#ocultar").show();

		caja.slideDown('slow');
	});

$("#ocultar").click(function(){
		$(this).hide();
		$("#mostrar").show();

		caja.slideUp('slow', function(){
			console.log("Cartel ocultado");
		});
		
	});

var caja2 = $("#caja2");

$("#mostrar-2").hide();

$("#mostrar-2").click(function(){
		$(this).hide();
		$("#ocultar-2").show();

		caja2.slideDown('slow');
	});

$("#ocultar-2").click(function(){
		$(this).hide();
		$("#mostrar-2").show();

		caja2.slideUp('slow', function(){
			console.log("Cartel ocultado");
		});
		
	});

var caja3 = $("#caja3");

$("#mostrar-3").hide();

$("#mostrar-3").click(function(){
		$(this).hide();
		$("#ocultar-3").show();

		caja3.slideDown('slow');
	});

$("#ocultar-3").click(function(){
		$(this).hide();
		$("#mostrar-3").show();

		caja3.slideUp('slow', function(){
			console.log("Cartel ocultado");
		});
		
	});
});