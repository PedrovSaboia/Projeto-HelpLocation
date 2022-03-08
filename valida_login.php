<?php
//inicializa a sessão
session_start();



//receber os dados do form
$email = $_POST['email'];
$senha = $_POST['senha'];

//consultar banco de dados

//inserindo o arquivo de configuração da conexão
include_once('conexao.php');
//string de seleção
//todos os campos
//$sql = "SELECT * FROM user";
//select com where
$sql = "SELECT * FROM user WHERE email = '$email' && senha = '$senha'";

// executa a consulta com base na string
$query = mysqli_query($conexao, $sql);
// verifica se a consulta
$user = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if ($user > 0) {

        $_SESSION['autenticado'] = "sim";
       // $_SESSION['perfil'] = $user['perfil'];
        $_SESSION['user'] =  $user['id'];
    
   if ($user['id']== 1)
       {
        header("location:administrador.php");

       }
       else {
        header("location:cliente.php");

       }
    }
     else {
//echo "erro";
      header("location:cadastro.php");
        
    }

mysqli_close($conexao);

//include_once "comum/rodape.html";
?>