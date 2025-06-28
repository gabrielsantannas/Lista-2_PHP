<?php

$anonasc = $_POST['anonasc'];

$idade = date('Y') - $anonasc;

echo "Sua idade é: $idade anos<br>";

?>