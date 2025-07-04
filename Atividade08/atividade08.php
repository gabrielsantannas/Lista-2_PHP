<?php

$anonasc = $_POST['anonasc'];

$idade = date("y") - $anonasc;

echo "Sua idade é: $idade anos<br>";

?>