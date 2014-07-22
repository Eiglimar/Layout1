$(document).ready(function(){
   var taman = $(window).width();
   if(taman < 768)
   {
   	  $("#corpo-position").removeClass("corpo-position");	
      $("#vertical-menu").removeClass("navbar-fixed-top");
      $("#corpo-position").addClass("corpo-position-2");
   }
});