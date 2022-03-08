<?PHP
//configuração da conexão
$host = "localhost";
$user = "root";
$pass = "usbw";
$bd   = "helplocation";
//conecta o banco de dados
$conexao = mysqli_connect($host,$user,$pass,$bd) 
        or die ("Falha ao conectar o banco de dados: ".mysql_error());
//configura o mapa de caracteres
mysqli_set_charset($conexao,'UTF8');
//configura o horário para o fuso de São Paulo
date_default_timezone_set('America/Sao_Paulo');
?>
