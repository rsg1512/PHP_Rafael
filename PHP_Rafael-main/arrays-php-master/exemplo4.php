<?php
echo "Exemplo 4: Arrays associativos <br>";
$usuario = [
    "nome" => "Maria",
    "idade" => 25,
    "cidade" => "Joinville"
];

echo $usuario["nome"];
echo $usuario["idade"];

echo "Exemplo 6: Iterando com foreach em arrays associativos <br>";
foreach ($usuario as $chave => $valor) {
    echo "$chave: $valor <br>";
}
?>