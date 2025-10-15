<?php
    require_once "conexao.php";
    $nome = $_POST["nome"];
    $livro = $_POST["livro"];
    $emprestimo = $_POST["emprestimo"];
    $devolucao = $_POST["devolucao"];

    $sql = "INSERT INTO tb_emprestimo(id_aluno, id_livro, data_emprestimo, data_devolucao) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'iiss', $nome, $livro, $emprestimo, $devolucao);
    mysqli_stmt_execute($comando);
 
    mysqli_stmt_close($comando);
 
    header("Location: index.php");
?>