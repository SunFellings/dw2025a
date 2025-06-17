<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar_livro.php" method="post" enctype="multipart/form-data">
        Nome: <br>
        <input type="text" name="nome"> <br>
        
        Gênero: <br>
        <input type="text" name="genero"> <br>
        
        Ano: <br>
        <input type="text" name="ano"> <br>

        Foto: <br>
        <input type="file" name="foto"> <br>

        <input type="submit" value="Salvar Livro">
    </form>
</body>
</html>