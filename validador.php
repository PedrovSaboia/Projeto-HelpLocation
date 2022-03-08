<?php

session_start();
//verifica se existe a sessão autenticado
if(!isset($_SESSION["autenticado"]) or ($_SESSION["autenticado"] != "sim"))
{
    session_destroy();
    //direciona para index com erro 2
	header('location:index.php?login=erro2');
} 

?>