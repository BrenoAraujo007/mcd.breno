<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (Produto, Quantidade, Preco) VALUES (?, ?, ?)";
    $dados = $pdo->prepare($sql);
    $dados->execute([$produto, $quantidade, $preco]);

    echo "Produto cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inserir Dados</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form method="post">
    Produto: <input type="text" name="produto"><br>
    Quantidade: <input type="number" name="quantidade"><br>
    Preço: <input type="text" name="preco"><br>
    <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="tabela.php">Ver Usuários</a>
</body>
</html>