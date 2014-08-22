$(document).ready(function(){
 
   if ($(window).width() >= 768 )
   {
       $('ul.identifica-menu').addClass("cl-effect-21");
   }
   else if ($(window).width() < 768 )
   {
      $('ul.identifica-menu').addClass("cl-effect-1");
   }
});  