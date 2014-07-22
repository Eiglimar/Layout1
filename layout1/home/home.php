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
<body  id="corpo-position voltarTopo">
	<?php include('../includes/identificador-paginas.php'); ?>
	<?php include('../includes/topo.php'); ?>
	<?php include('conteudo-home.php'); ?>
	<?php include('../includes/rodape.php'); ?>

<a href="#" class="voltarTopo" onclick="$j('html,body').animate({scrollTop: $j('#voltarTopo').offset().top}, 2000);">Topo</a>
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
<script type="text/javascript">
// Use jQuery com a variavel $j(...)
var $j = jQuery.noConflict();
$j(document).ready(function() {
$j(".voltarTopo").hide();
$j(function () {
$j(window).scroll(function () {
if ($j(this).scrollTop() > 300) {
$j('.voltarTopo').fadeIn();
} else {
$j('.voltarTopo').fadeOut();
}
});
$j('.voltarTopo').click(function() {
$j('body,html').animate({scrollTop:0},600);
}); 
    });});
</script>

</body>
</html>