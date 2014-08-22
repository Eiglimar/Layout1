//FUNÇÃO PARA ROLAGEM DE PAGINA E VOLTAR AO TOPO SUAVEMENTE
$(document).ready(function(){
	
	var backtoTop = $('.going-top');

	backtoTop.click(function(){
		$('html, body').animate({ scrollTop: 0 }, 900);
	});

 	backtoTop.hide(); // hide back to top button

	$(window).scroll(function (e) {
	   if ($(this).scrollTop() < 50) { 
			backtoTop.fadeOut();
	    } else {
	        backtoTop.fadeIn();
	    }
	});
});