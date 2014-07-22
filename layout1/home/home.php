<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/customizar.css" rel="stylesheet">
	<title>Home - Site Base</title>
</head>
<body  id="corpo-position">
	<?php include('../includes/identificador-paginas.php'); ?>
	<?php include('../includes/topo.php'); ?>
	<?php include('conteudo-home.php'); ?>
	<?php include('../includes/rodape.php'); ?>

<a href="#" id="toTop">Para /\</a>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/plugins/slide-comeca-automaticamente.js" type="text/javascript"></script>
<script src="../js/plugins/fitvids.js" type="text/javascript"></script>
<script src="../js/plugins/vertical-menu.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#video-exemplo").fitVids();
  });
</script>
<script type='text/javascript'>
$(function(){$.fn.scrollToTop=function(){$(this).hide().removeAttr(&quot;href&quot;);if($(window).scrollTop()!=&quot;0&quot;){$(this).fadeIn(&quot;slow&quot;)}var   scrollDiv=$(this);$(window).scroll(function(){if($(window).scrollTop()==&quot;0&quot;){$(scrollDiv).fadeOut(&quot;slow&quot;)}else{$(scrollDiv).fadeIn(&quot;slow&quot;)}});$(this).click(function(){$(&quot;html,  body&quot;).animate({scrollTop:0},&quot;slow&quot;)})}}); 
  $(function() {    
    $(&quot;#toTop&quot;).scrollToTop();     
  });     
</script>

</body>
</html>