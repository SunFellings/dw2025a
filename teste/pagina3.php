<?php
session_start();
$_SESSION['endereco'] = $_GET['endereco'];
$_SESSION['telefone'] = $_GET['telefone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Página 3</h2>

    <form action="saida.php">
        Senha:
        <input type="text" name="senha"> <br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>