<?php
require 'conexao.php';

$sql = "SELECT * FROM produtos";
$dados = $pdo->query($sql);
$produtos = $dados ->fetchAll(PDO::FETCH_ASSOC);

foreach ($produtos as $produto) {
    echo "ID: " . $produto['Id_Produto'] . "<br>";
    echo "Produto: " . $produto['Produto'] . "<br>";
    echo "Quantidade: " . $produto['Quantidade'] . "<br>";
    echo "Preço: " . $produto['Preco'] . "<br><br>";
}
?>
