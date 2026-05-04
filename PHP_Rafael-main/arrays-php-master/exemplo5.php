<?php
echo "Exemplo 5: Arrays multidimensionais <br>";
$alunos = [
    ["João", 8],
    ["Maria", 9],
    ["Pedro", 7]
];

echo $alunos[0][0]; // João
echo $alunos[1][1] . "<br>"; // 9

echo "Iterando com foreach em arrays multidimensionais <br>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno[0] . " - Nota: " . $aluno[1] . "<br>";
}
?>
