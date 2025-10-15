<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: index.php');
} else {
    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];
    $tipo = $_SESSION['tipo'];
    $matricula = $_SESSION['matricula'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página inicial</h1>

    <p>Olá, <?php echo $nome; ?>.</p>
    <p>Sua matrícula de
        <?php
        if ($tipo == 'a') {
            echo "aluno";
        } else {
            echo "funcionário";
        }
        echo " é $matricula";
        ?>
    </p>

    <a href="form_livro.php">Cadastrar Livro</a> <br>
    <a href="form_autor.php">Cadastrar Autor</a> <br>

    <hr>

    <a href="listar_autores.php">Lista de autores</a> <br>
    <a href="listar_livros.php">Lista de Livros</a> <br>
    <a href="listar_livros_2.php">Lista de Livros (cartões)</a>

    <br>
    <a href="deslogar.php">Sair</a>
</body>

</html>