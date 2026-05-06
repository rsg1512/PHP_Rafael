<?php

// Verifica se veio pelo formulário
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Recebendo dados do formulário
    $peso   = $_POST["peso"];
    $altura = $_POST["altura"];

    // Calculando IMC
    $imc = $peso / ($altura * $altura);

    // Arredondar para 2 casas
    $imc = number_format($imc, 2);

    // Classificação
    if($imc < 18.5){
        $classificacao = "Abaixo do peso";
    }
    elseif($imc < 25){
        $classificacao = "Peso normal";
    }
    elseif($imc < 30){
        $classificacao = "Sobrepeso";
    }
    elseif($imc < 35){
        $classificacao = "Obesidade grau I";
    }
    elseif($imc < 40){
        $classificacao = "Obesidade grau II";
    }
    else{
        $classificacao = "Obesidade grau III";
    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado IMC</title>
</head>
<body>

<h1>Resultado do IMC</h1>

<p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
<p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
<p><strong>IMC:</strong> <?php echo $imc; ?></p>
<p><strong>Classificação:</strong> <?php echo $classificacao; ?></p>

<br>
<a href="index.php">Voltar</a>

</body>
</html>