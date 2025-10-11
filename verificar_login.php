<?php
session_start();
require_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_usuario WHERE email = ? AND senha = ?";
$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, 'ss', $email, $senha);

mysqli_stmt_execute($comando);

$resultados = mysqli_stmt_get_result($comando);
$quantidade = mysqli_num_rows($resultados);

if ($quantidade == 0) {
    header('Location: index.php');
} else {
    $usuario = mysqli_fetch_assoc($resultados);
    $tipo = $usuario['tipo'];
    $id = $usuario['id_usuario'];

    $_SESSION['tipo'] = $tipo;
    $_SESSION['id'] = $id;

    // consulta para pegar o nome do usuário

    if ($tipo == 'a') {
        $sql = "SELECT * FROM tb_aluno WHERE id_usuario = ?";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, 'i', $id);
        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);
        $aluno = mysqli_fetch_assoc($resultados);

        $_SESSION['id_aluno'] = $aluno['id_aluno'];
        $_SESSION['nome'] = $aluno['nome'];
        $_SESSION['matricula'] = $aluno['matricula'];
        $_SESSION['data_nascimento'] = $aluno['data_nascimento'];
    } else {
        $sql = "SELECT * FROM tb_funcionario WHERE id_usuario = ?";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, 'i', $id);
        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);
        $funcionario = mysqli_fetch_assoc($resultados);

        // É seguro guardar todos esses dados na sessão?
        // É uma boa prática gravar todos esses dados na sessão?
        $_SESSION['id_funcionario'] = $funcionario['id_funcionario'];
        $_SESSION['nome'] = $funcionario['nome'];
        $_SESSION['matricula'] = $funcionario['matricula'];
        $_SESSION['data_contratacao'] = $funcionario['data_contratacao'];
    }
    header('Location: home.php');
}
