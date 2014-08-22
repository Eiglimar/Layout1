<?php
/* Seguindo os Padrões especificados na RFC 2616, página 27, está sendo retornado para o usuário */
/* o Código de Status 302 (Conteúdo não Modificado) em conjunto com o Header: Location setado    */
/* para lista.php do mesmo diretório, no mesmo servidor.                                         */
/* NENHUMA ALTERAÇÃO NESTE ARQUIVO É NECESSÁRIA.   												*/
header("Location: http://".$_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) ."/". 'home');
exit();
?>