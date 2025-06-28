<?php

$nome = $_POST["nome"];
$preco = $_POST["preco"];

$precoFormatado = number_format($preco, 2, ',', '.');

echo "Produto: $nome — Preço: R$ $precoFormatado";

?>