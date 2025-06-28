<?php

$reais = $_POST['reais'];
$cotacao = $_POST['cotacao'];

$valordolar = $reais / $cotacao;

echo "O valor em dólar é: US$ " . number_format($valordolar, 2, ',', '.')
?>