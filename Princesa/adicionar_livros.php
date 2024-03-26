<?php
// Obtém os dados do formulário
    include 'config.php';

    // Prepara e executa a query SQL para inserir os dados na tabela de livros
    $sql = "INSERT INTO livros (nome, descricao, autor, genero, classificacao, valor) VALUES ('$nome', '$descricao', '$autor', '$genero', '$classificacao', '$valor')";

    if ($conn->query($sql) === TRUE) {
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o livro: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    // Redireciona para o formulário se não houver envio via POST
    header("Location: form_cadastro.html");
    exit;
}
?>