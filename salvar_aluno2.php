<?php
    require_once 'conexao.php';
    $nome = $_GET['nome'];
    $matricula = $_GET['matricula'];
    $curso = $_GET['curso'];
    $turma = $_GET['turma'];
    $nascimento = $_GET['nascimento'];

    $sql = "INSERT INTO tb_aluno     (nome, matricula, curso, turma, data_nascimento) VALUES (?, ?, ?, ?, ?)";

    $comando = mysqli_prepare ($conexao, $sql);
    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal

    mysqli_stmt_bind_param ($comando, 'sssss', $nome, $matricula, $curso, $turma, $nascimento);
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    header ('Location: index.php')
?>