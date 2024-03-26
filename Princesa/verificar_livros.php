<?php 
// Prepara e executa a query SQL para selecionar todos os livros

include 'processa_'

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados de cada livro em uma tabela
    echo "<h2>Livros Cadastrados</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Descrição</th><th>Autor</th><th>Gênero</th><th>Classificação</th><th>Valor</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>" . $row["autor"] . "</td>";
        echo "<td>" . $row["genero"] . "</td>";
        echo "<td>" . $row["classificacao"] . "</td>";
        echo "<td>" . $row["valor"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum livro cadastrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>