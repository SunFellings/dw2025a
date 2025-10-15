<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_emprestimo.php" method="post">
         Nome: <br>
            <select name="nome">
            <?php
                require_once "conexao.php";
                $sql = "SELECT * FROM tb_aluno";
                $comando = mysqli_prepare ($conexao, $sql);
                mysqli_stmt_execute($comando);
                $resultados = mysqli_stmt_get_result($comando);

                while ($aluno = mysqli_fetch_assoc($resultados)){
                    $nome = $aluno["nome"];
                    $id = $aluno["id_aluno"];

                    echo "<option value='$id'>$nome</option>";
                }

            ?>
         </select>

        <br><br>
        
        Livro: <br>
        <select name="livro">
        <?php
                require_once "conexao.php";
                $sql = "SELECT * FROM tb_livro";
                $comando = mysqli_prepare ($conexao, $sql);
                mysqli_stmt_execute($comando);
                $resultados = mysqli_stmt_get_result($comando);

                while ($livro = mysqli_fetch_assoc($resultados)){
                    $nome = $livro["nome"];
                    $id = $livro["id_livro"];

                    echo "<option value='$id'>$nome</option>";
                }

            ?>
        </select>
        <br><br>
        Data do emprestimo: <br>
        <input type="date" name="emprestimo"> <br><br>

        Data de devolução: <br>
        <input type="date" name="devolucao">
<br><br>
        <input type="submit" value="Salvar Emprestimo">


    </form>
    </body>
    </html>