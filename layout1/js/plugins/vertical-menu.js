$(document).ready(function(){
 
   if ($(window).width() >768 )
   {
      $("body").addClass("corpo-position-2");
       $('#vertical-menu').addClass("navbar-fixed-top");
   }
   else if ($(window).width() <= 768 )
   {
      $('body').addClass('corpo-position');
      $('#vertical-menu').addClass('navbar-static-top'); 
   }
});  