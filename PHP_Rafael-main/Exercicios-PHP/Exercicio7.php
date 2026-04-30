<?php
function calculadora($n1, $n2, $operador) {
    switch ($operador) {
        case "+":
            echo "$n1 + $n2 = " . ($n1 + $n2) . ". <br>";
            break;

        case "-":
            echo "$n1 - $n2 = " . ($n1 - $n2) . ". <br>";
            break;

        case "*":
            echo "$n1 x $n2 = " . ($n1 * $n2) . ". <br>";
            break;

        case "/":
            
            if ($n2 != 0) {
                echo "$n1 ÷ $n2 = " . ($n1 / $n2) . ". <br>";
            } else {
                echo "Erro: divisão com 0 não existe. <br>";
            }
            break;

        default:
            echo "operador invalido. <br>";
            break;
    }
}

calculadora(7, 8, "+"); 
?>