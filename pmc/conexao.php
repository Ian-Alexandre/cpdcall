<?php
	
	$host = "104.234.63.94";
    $user = "francegg";
    $pass = "2tHOMcidadefranceggdevelopment@sTArKs1";
    $banco = "arvdesk";
    //Cria a conexao
    $conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
    mysqli_select_db($conexao, $banco) or die (mysqli_error());
?>