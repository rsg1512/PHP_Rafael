<?php
$endereco = null;

if (isset($_POST['cep'])) {
    $cep = preg_replace('/\D/', '', $_POST['cep']); // Limpa o CEP
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    
    // Consome a API
    $response = file_get_contents($url);
    $endereco = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <form method="POST">
        CEP: <input type="text" name="cep" value="<?php echo $_POST['cep'] ?? ''; ?>">
        <button type="submit">Consultar</button>
        <hr>
        Rua: <input type="text" value="<?php echo $endereco['logradouro'] ?? ''; ?>"><br>
        Bairro: <input type="text" value="<?php echo $endereco['bairro'] ?? ''; ?>"><br>
        Cidade: <input type="text" value="<?php echo $endereco['localidade'] ?? ''; ?>"><br>
        Estado: <input type="text" value="<?php echo $endereco['uf'] ?? ''; ?>"><br>
    </form>
</body>
</html>