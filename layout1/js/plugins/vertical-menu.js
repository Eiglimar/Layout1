$(document).ready(function(){
   var tam = $(window).width();
 
   if (tam >= 768 )
   {
      $("#corpo-position").addClass("corpo-position");
      $("#vertical-menu").addClass("navbar-fixed-top"); 
   }
   else
   {
      $("#corpo-position").addClass("corpo-position-2");
      $("#vertical-menu").addClass("navbar-static-top"); 
   }
});  