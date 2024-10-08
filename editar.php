<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos SET Produto = ?, Quantidade = ?, Preco = ? WHERE Id_Produto = ?";
    $dados = $pdo->prepare($sql);
    $dados->execute([$produto, $quantidade, $preco, $id]);

    echo "Produto atualizado com sucesso!";
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE Id_Produto = ?";
    $dados = $pdo->prepare($sql);
    $dados->execute([$id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $produto['Id_Produto']; ?>">
    Produto: <input type="text" name="produto" value="<?php echo $produto['Produto']; ?>"><br>
    Quantidade: <input type="number" name="quantidade" value="<?php echo $produto['Quantidade']; ?>"><br>
    Preço: <input type="text" name="preco" value="<?php echo $produto['Preco']; ?>"><br>
    <button type="submit">Atualizar</button>
</form>
