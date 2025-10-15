<?php
     require_once "conexao.php";
    
     // pega as valores lá do formulário
     $nome = $_GET['nome'];
     $carga_horaria = $_GET['carga_horaria'];
     $ano = $_GET['ano'];    
     
     $sql = "INSERT INTO tb_curso (nome, carga_horaria, ano_inicio) VALUES (?, ?, ?)";
     $comando = mysqli_prepare($conexao, $sql);
 
     // letra s -> varchar, date, datetime, char
     // letra i -> int
     // letra d -> float, decimal
     mysqli_stmt_bind_param($comando, 'sii', $nome, $carga_horaria, $ano);
 
     mysqli_stmt_execute($comando);
 
     mysqli_stmt_close($comando);
 
     header("Location: index.php");

?>