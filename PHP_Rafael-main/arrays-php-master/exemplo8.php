<?php

$diaSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

echo "Exemplo com uso de var_dump". "<br>";
var_dump($diaSemana);

echo "<hr>";
echo "Exemplo com uso de print_r para melhor visualização". "<br>";
print_r($diaSemana);

echo "<hr>";
echo "Exemplo com uso do pre para melhor formatação". "<br>";

echo "<pre>";
var_dump($diaSemana);
echo "</pre>";