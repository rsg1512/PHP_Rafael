<?php
echo "Exemplo 7: Manipulando arrays - Adiciona item <br>";
$carros = ["Gol", "Corsa"];
array_push($carros, "Fusca");

print_r($carros);
echo "<br>";
echo "Exemplo 7: Manipulando arrays - Contar itens <br>";
echo count($carros) . "<br>"; // 3


echo "Exemplo 7: Manipulando arrays - Verificar existência <br>";
if (in_array("Gol", $carros)) {
    echo "Existe!";
}

echo "<br>";
echo "Exemplo 7: Manipulando arrays - Remover item <br>";
unset($carros[1]);
print_r($carros);
?>
