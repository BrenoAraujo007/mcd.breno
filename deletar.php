<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM produtos WHERE Id_Produto = ?";
    $dados = $pdo->prepare($sql);
    $dados->execute([$id]);

    echo "Produto deletado com sucesso!";
}
?>

<form method="post">
    ID do Produto: <input type="number" name="id"><br>
    <button type="submit">Deletar</button>
</form>
