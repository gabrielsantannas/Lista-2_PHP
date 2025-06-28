<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$IMC = $peso / ($altura * $altura);

echo "<h1>Seu IMC é: " . number_format($IMC, 2, ',', '.') . "</h1>"
?>