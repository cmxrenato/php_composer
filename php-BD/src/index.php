<?php

declare(strict_types=1);
require 'Produto.php';


$produto = new Produto('Console Nitendo Switch 2', 6585, 'Descrição do Produto 4');
//$produto->delete();
$produto->insert();
//$produto->update('Pc');

echo '<h1>Produtos</h1>';
foreach ($produto->list() as $row) {
	echo '<p>';
	echo 'ID: ' . $row['id'] . '<br>';
	echo 'Nome: ' . $row['nome'] . '<br>';
	echo 'Preço: R$' . $row['preco'] . '<br>';
	echo 'Descrição: ' . $row['descricao'] . '<br>';
	echo '</p>';
}

