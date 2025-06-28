<?php

$partes = explode(" ", $_POST["nome"]);
$sobrenome = array_pop($partes);
$nome = implode(" ", $partes);

echo "$sobrenome, $nome";

?>