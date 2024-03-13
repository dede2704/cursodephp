<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Filmes</title>
</head>
<body>
    <h1>Cadastro de Filmes</h1>
    <form method="post" action="save.php">
        <label>Nome do filme:</label>
        <imput type= "text" name="filme" /> <br>

        <label>Categoria:</label> <br>
        <input type="checkbox" name="acao"> Ação <br>
        <input type="checkbox" name="aventura"> Aventura <br>
        <input type="checkbox" name="comedia"> Comédia <br>
        <input type="checkbox" name="drama"> Drama <br>
        <input type="checkbox" name="infantil"> Infantil <br>
        <input type="checkbox" name="suspense"> Suspense <br>
        <input type="checkbox" name="terror"> Terror <br>
        <input type="submit">
    </form>
</body>
</html>