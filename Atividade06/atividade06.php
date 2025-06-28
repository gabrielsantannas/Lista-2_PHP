<?php

$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$quadra = $_POST['quadra'];

echo "O endereço informado é: " . $cidade . ", " . $bairro . ", " . $rua . ", " . $numero . ", Quadra: " . $quadra . ".<br>";

?>