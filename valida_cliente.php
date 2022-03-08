<?php

include_once 'conexao.php';



$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$instituicao = $_POST['instituicao'];


$sql =  "INSERT INTO user (nome,email, senha, instituicao) VALUES ('$nome', '$email', '$senha', '$instituicao')";

// executa a consulta com base na string
$query = mysqli_query($conexao, $sql);
// verifica se a consulta
if ($query) {
    header('location:login.php');
} else {
    echo "erro";
}

mysqli_close($conexao);

?>