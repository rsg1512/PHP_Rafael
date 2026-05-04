<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização básica
    $cliente = htmlspecialchars($_POST['nome_cliente']);
    $is_vip = isset($_POST['cliente_vip']);
    $produto = htmlspecialchars($_POST['nome_produto']);
    $estoque = (int)$_POST['qtd_estoque'];
    $preco_un = (float)$_POST['valor_unitario'];
    $venda_qtd = (int)$_POST['qtd_vendida'];

    echo "<!DOCTYPE html><html lang='pt-br'><head><link rel='stylesheet' href='css/style.css'></head><body>";
    echo "<h1>Resumo da Venda</h1>";
    echo "<div class='container-resultado'>";

    if ($venda_qtd > $estoque) {
        echo "<h3 style='color:red; text-align:center;'>Erro: Quantidade insuficiente!</h3>";
        echo "<p style='text-align:center;'>Estoque disponível: $estoque unidades.</p>";
    } else {
        $desconto = 0;
        if ($is_vip) {
            $desconto = $preco_un * 0.20;
        }
        
        $preco_final = $preco_un - $desconto;
        $total = $preco_final * $venda_qtd;

        echo "<p><strong>Cliente:</strong> $cliente " . ($is_vip ? "<span style='color:gold;'>★ VIP</span>" : "") . "</p>";
        echo "<p><strong>Produto:</strong> $produto</p>";
        echo "<p><strong>Qtd Vendida:</strong> $venda_qtd</p>";
        echo "<p><strong>Preço Unitário:</strong> R$ " . number_format($preco_un, 2, ',', '.') . "</p>";
        
        if ($is_vip) {
            echo "<p style='color:green;'><strong>Desconto aplicado:</strong> R$ " . number_format($desconto * $venda_qtd, 2, ',', '.') . "</p>";
        }

        echo "<hr><h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    }

    echo "<p style='text-align:center;'><a href='exer1.html'>Nova Venda</a></p>";
    echo "</div></body></html>";
}
?>