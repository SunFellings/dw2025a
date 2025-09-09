<?php

session_start();

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$endereco = $_SESSION['endereco'];
$telefone = $_SESSION['telefone'];
$senha = $_GET['senha'];

echo "Simulando uma gravação no banco...<br>";

echo $nome . "<br>";
echo $email . "<br>";
echo $endereco . "<br>";
echo $telefone . "<br>";
echo $senha . "<br>";

session_destroy();

?>