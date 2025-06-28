<?php

$vrhora = $_POST['vrhora'];
$hrsem = $_POST['hrsem'];

$salariobruto = $vrhora * $hrsem * 4.5;

echo "O salário bruto mensal é: R$ " . number_format($salariobruto, 2, ',', '.')
?>