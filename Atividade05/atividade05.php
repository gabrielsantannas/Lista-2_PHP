<?php

$preco = $_POST['preco'];
$taxa = $_POST['taxa'];

$precofinal = $preco + ($preco * $taxa / 100);

echo "<h1>O preço final do produto é: R$ " . number_format($precofinal, 2, ',', '.') . "</h1>";

?>