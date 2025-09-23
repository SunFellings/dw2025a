<?php

if (isset($_GET['id'])) {
    // echo "editar...";

    $id = $_GET['id'];

    require_once "conexao.php";

    $sql = "SELECT * FROM tb_autor WHERE id_autor = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $id);
    mysqli_stmt_execute($comando);

    $resultados = mysqli_stmt_get_result($comando);

    $autor = mysqli_fetch_assoc($resultados);

    $nome = $autor['nome'];
    $nascimento = $autor['data_nascimento'];
    $nacionalidade = $autor['nacionalidade'];
}
else {
    // echo "cadastrar...";
    
    $id = 0;
    $nome = "";
    $nascimento = "";
    $nacionalidade = "";
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
    <form action="salvar_autor.php?id=<?php echo $id; ?>" method="POST">
        Nome: <br>
        <input type="text" name="nome" value="<?php echo $nome;?>"> <br><br>

        Data de nascimento: <br>
        <input type="date" name="nascimento" value="<?php echo $nascimento;?>"> <br><br>

        Nacionalidade: <br>
        <input type="text" name="nacionalidade" value="<?php echo $nacionalidade;?>"> <br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>