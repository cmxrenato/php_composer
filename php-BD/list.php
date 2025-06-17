<?php

declare(strict_types=1);

$pdo = require 'conexao.php';

echo '<h1>Produtos</h1>';
$sql = 'SELECT id,nome,preco,descricao FROM produtos';

foreach ($pdo->query($sql) as $row) {
    echo '<p>';
    echo 'ID: ' . $row['id'] . '<br>';
    echo 'Nome: ' . $row['nome'] . '<br>';
    echo 'Preço: R$' . $row['preco'] . '<br>';
    echo 'Descrição: ' . $row['descricao'] . '<br>';
    echo '</p>';
}