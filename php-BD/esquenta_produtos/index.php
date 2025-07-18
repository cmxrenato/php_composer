<?php

declare(strict_types=1);
require 'src/Produto.php';


$produto = new Produto('Ventilador', 256, 'Descrição do ventilador');
//$produto->deletar();
$produto->inserir();
//$produto->update('Pc');

echo '<h1>Produtos</h1>';
foreach ($produto->listar() as $row) {
	echo '<p>';
	echo 'ID: ' . $row['id'] . '<br>';
	echo 'Nome: ' . $row['nome'] . '<br>';
	echo 'Preço: R$' . $row['preco'] . '<br>';
	echo 'Descrição: ' . $row['descricao'] . '<br>';
	echo '</p>';
}

