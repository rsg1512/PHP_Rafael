<?php

$usuarios = [
    [
        "nome" => "Ana",
        "email" => "ana@email.com"
    ],
    [
        "nome" => "Carlos",
        "email" => "carlos@email.com"
    ]
];

echo $usuarios[1]["nome"] . "<br>"; // Carlos

echo "Iterando com foreach em arrays multidimensionais associativos <br>";

foreach ($usuarios as $user) {
    echo "Nome: " . $user["nome"] . "<br>";
    echo "Email: " . $user["email"] . "<br><br>";
}
?>
