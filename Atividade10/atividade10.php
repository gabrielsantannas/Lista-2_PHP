<?php

$comprimento = $_POST['comprimento'];
$largura = $_POST['largura'];
$altura = $_POST['altura'];

$volume = $comprimento * $largura * $altura;

echo "O volume da caixa é: " . $volume . " metros cúbicos.<br>";
?>