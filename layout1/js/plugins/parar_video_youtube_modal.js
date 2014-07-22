	$(document).ready(function(){
	  $("#contato").on('hide.bs.modal', function(evt){
	    var player = $(evt.target).find('iframe'),
	        vidSrc = player.prop('src');
	    player.prop('src', ''); // to force it to pause
	    player.prop('src', vidSrc);
	  });
	});