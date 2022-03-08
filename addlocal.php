<?php

include_once 'conexao.php';



$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];


$sql =  "INSERT INTO local (endereco, complemento, cidade, cep) VALUES ('$endereco', '$complemento', '$cidade', '$cep')";

// executa a consulta com base na string
$query = mysqli_query($conexao, $sql);
// verifica se a consulta
if ($query) {
    header('location:cliente.php');
} else {
    echo "erro";
}

mysqli_close($conexao);

?>