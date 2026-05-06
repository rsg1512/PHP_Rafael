<?php
$arquivo = "clientes.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];

    if (file_exists($arquivo)) {
        $json_antigo = file_get_contents($arquivo);
        $lista_clientes = json_decode($json_antigo, true);
    } else {
        $lista_clientes = [];
    }

    $lista_clientes[] = [
        "nome" => $nome, 
        "email" => $email, 
        "senha" => $senha
    ];

    file_put_contents($arquivo, json_encode($lista_clientes));
    echo "Cliente salvo com sucesso!<br><hr>";
}

// --- PARTE DE LEITURA ---

if (file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $clientes = json_decode($json, true);

    foreach ($clientes as $c) {
        echo "Nome: " . $c["nome"] . " | Email: " . $c["email"] . "<br>";
    }
}
?>

<br>
<a href="exer1.html">Voltar</a>