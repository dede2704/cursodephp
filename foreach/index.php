<?php

$clientes = [
    ["name" => "Peter Parker", "email" => "parker@hotmail.com"],
    ["name" => "Mary Jane", "email" => "maryjane@hotmail.com"],
    ["name" => "Gwen Stacy", "email" => "stacy.gwen@hotmail.com"],
    ["name" => "Otto Octavius", "email" => "dr.octavius@hotmail.com"],
    ["name" => "Norman Osborn", "email" => "greengoblin@hotmail.com"],
    ["name" => "Harry Osborn", "email" => "greengoblin2@hotmail.com"],
];

foreach ($clientes as $cliente) {
    echo "<b>nome: </b>" . $cliente["name"] . "<br>";
    echo "<strong>E-mail: </strong>" . $cliente["email"] . "<br>";
    echo "<br>";
}

echo "<hr>";

// echo "<pre>";
// print_r($clientes);
// echo "</pre>";

foreach ($clientes as $key => $value) {
    echo $key + 1 . " - " .  $value["name"] .  " - " .  $value["email"] . "<br>";
}
echo "<hr>";

foreach ($clientes as $cliente) {
    foreach ($cliente as $chave => $valor) {
        echo $chave . ": " . $valor . "<br>";
    }
    echo "<br>";
}