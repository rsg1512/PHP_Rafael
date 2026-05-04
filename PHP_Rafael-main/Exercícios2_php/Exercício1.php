<?php
$produto = [
    "nome" => "Teclado Mecânico",
    "preco" => 250.50,
    "qtestoque" => 15
];

$valorTotalEstoque = $produto["preco"] * $produto["qtestoque"];

echo "<strong>Nome:</strong> " . $produto["nome"] . "<br>";
echo "<strong>Preço:</strong> R$ " . number_format($produto["preco"], 2, ',', '.') . "<br>";
echo "<strong>Qtestoque:</strong> " . $produto["qtestoque"] . "<br>";
echo "<strong>Total do estoque:</strong> R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "<br>";
?>