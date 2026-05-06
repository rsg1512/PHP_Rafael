<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Coleta e sanitização
    $cliente = htmlspecialchars($_POST['nome_cliente']);
    $is_vip = isset($_POST['cliente_vip']);
    $produto = htmlspecialchars($_POST['nome_produto']);
    $estoque = (int)$_POST['qtd_estoque'];
    $preco_un = (float)$_POST['valor_unitario'];
    $venda_qtd = (int)$_POST['qtd_vendida'];

    // Regra 1: Validação de Estoque
    if ($venda_qtd > $estoque) {
        $mensagem = 'Quantidade Inválida';
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
?>

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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Venda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container-resultado">
        <h1>Resumo da Venda</h1>

        <?php if ($erro): ?>
            <h3 style="color: #d9534f; text-align: center;"><?php echo $erro; ?></h3>
        <?php else: ?>
            <p><strong>Cliente:</strong> <?php echo $cliente; ?> 
                <?php if ($is_vip) echo "<span style='color:gold;'>★ VIP</span>"; ?>
            </p>
            <p><strong>Produto:</strong> <?php echo $produto; ?></p>
            <p><strong>Qtd Vendida:</strong> <?php echo $venda_qtd; ?></p>
            <p><strong>Preço Unitário:</strong> R$ <?php echo number_format($preco_un, 2, ',', '.'); ?></p>
            
            <?php if ($is_vip): ?>
                <p style="color: green;"><strong>Desconto VIP (20%):</strong> - R$ <?php echo number_format($desconto, 2, ',', '.'); ?> por item</p>
            <?php endif; ?>

            <hr>
            <h2 style="text-align: center; color: #28a745;">
                Total: R$ <?php echo number_format($total, 2, ',', '.'); ?>
            </h2>
        <?php endif; ?>

        <br>
        <div style="text-align: center;">
            <a href="exer1.html" class="link-voltar">← Realizar nova venda</a>
        </div>
    </div>

</body>
</html>