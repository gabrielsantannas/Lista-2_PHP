<?php

$salario = $_POST['salario'];
$percentual = $_POST['percentual'];

$reajuste = $salario + ($salario * $percentual / 100);

echo "O salário reajustado é: R$ " . number_format($reajuste, 2, ',', '.');
?>