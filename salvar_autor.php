<?php
    require_once "conexao.php";
    
    // pega as valores lá do formulário
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $nacionalidade = $_POST['nacionalidade'];

    if ($id == 0) {
        //novo
        $sql = "INSERT INTO tb_autor (nome, data_nascimento, nacionalidade) VALUES (?, ?, ?)";

        $comando = mysqli_prepare($conexao, $sql);
        
        mysqli_stmt_bind_param($comando, 'sss', $nome, $nascimento, $nacionalidade);
    }
    else {
        //editar
        $sql = "UPDATE tb_autor SET nome = ?, data_nascimento = ?, nacionalidade = ? WHERE id_autor = ?";
        
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($comando, 'sssi', $nome, $nascimento, $nacionalidade, $id);

    }

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.php");
?>
