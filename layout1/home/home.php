<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/customizar.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<title>Home - Site Base</title>
</head>
<body>
	<?php include('../includes/identificador-paginas.php'); ?>
	<?php include('../includes/topo.php'); ?>
	<?php include('conteudo-home.php'); ?>
	<?php include('../includes/rodape.php'); ?>

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

</body>
</html>