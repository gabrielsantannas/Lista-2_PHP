<?php

$valorConta = $_POST['valorConta'];
$numAmigos = $_POST['numAmigos'];

$vrPessoa = $valorConta / $numAmigos;

echo "O valor que cada pessoa deve pagar é: R$ " . number_format($vrPessoa, 2, ',', '.');

?>