<?php

declare(strict_types=1);

$pdo = require 'conexao.php';

$nome = 'Tablet Samsung Galaxy Tab S7';
$preco = 3002.50;
$descricao = 'Tablet Samsung Galaxy Tab S7 com tela de 11 polegadas, processador Snapdragon 865 Plus, 6GB de RAM e 128GB de armazenamento interno. Ideal para produtividade e entretenimento.';

$sql = 'INSERT INTO produtos (nome, preco, descricao) VALUES (:nome, :preco, :descricao)';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->execute();

echo $stmt->rowCount() . ' produto(s) inserido(s) com sucesso!';