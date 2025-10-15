<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
</head>

<body>
    <h2>Acesso ao Sistema</h2>
    <form action="verificar_login.php" method="POST">
        E-mail: <br>
        <input type="text" name="email"> <br><br>

<<<<<<< HEAD
    <a href="form_livro.php">Cadastrar Livro</a> <br>
    <a href="form_autor.php">Cadastrar Autor</a> <br>
    <a href="form_curso.php">Cadastrar Curso</a> <br>
    <a href="form_emprestimo.php">Cadastrar Emprestimo</a> <br>


=======
        Senha: <br>
        <input type="text" name="senha"> <br><br>
>>>>>>> 02178371d9f217f521de00565e3e0d4024a00286

        <input type="submit" value="Acessar">
    </form>

<<<<<<< HEAD
    <a href="listar_autores.php">Lista de autores</a> <br>
    <a href="listar_livros.php">Lista de Livros</a> <br>
    <a href="listar_livros_2.php">Lista de Livros (cartões)</a>
    
=======
    <?php
    if (isset($_GET['msg'])) {
        echo "<p>Usuário ou senha inválidos!</p>";
    }
    ?>
>>>>>>> 02178371d9f217f521de00565e3e0d4024a00286
</body>

</html>