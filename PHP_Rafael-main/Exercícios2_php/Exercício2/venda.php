<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Coleta e sanitização
    $cliente = htmlspecialchars($_POST['nome_cliente']);
    $is_vip = isset($_POST['cliente_vip']);
    $produto = htmlspecialchars($_POST['nome_produto']);
    $estoque = (int)$_POST['qtd_estoque'];
    $preco_un = (float)$_POST['valor_unitario'];
    $venda_qtd = (int)$_POST['qtd_vendida'];

    $erro = null;

    // Regra 1: Validação de Estoque
    if ($venda_qtd > $estoque) {
        $erro = "Quantidade insuficiente em estoque!";
    } else {
        // Regra 2: Cálculo de Desconto VIP (20%)
        $desconto = 0;
        if ($is_vip) {
            $desconto = $preco_un * 0.20;
        }

        $preco_final = $preco_un - $desconto;
        $total = $preco_final * $venda_qtd;
    }
} else {
    header("Location: exer1.html");
    exit();
}

include("resp.html");
?>

