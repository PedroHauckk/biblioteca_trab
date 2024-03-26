<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h2>Cadastro de Livros</h2>
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome do Livro:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>
        
        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" required><br><br>
        
        <label for="genero">Gênero:</label><br>
        <input type="text" id="genero" name="genero" required><br><br>
        
        <label for="classificacao">Classificação:</label><br>
        <input type="text" id="classificacao" name="classificacao" required><br><br>
        
        <label for="valor">Valor:</label><br>
        <input type="text" id="valor" name="valor" required><br><br>
        
        <button type="submit">Cadastrar Livro</button>
    </form>
    <form action="consulta_livros.php" method="get">
        <button type="submit">Consultar Livros</button>
    </form>


</body>
</html>
