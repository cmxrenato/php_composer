<?php
declare(strict_types=1);
$pdo = require 'conexao.php';

$sql = 'UPDATE produtos SET nome = :nome, preco = :preco, descricao = :descricao WHERE id = :id';
$stmt = $pdo->prepare($sql);
$id = 1; // ID do produto a ser atualizado
$nome = 'Smartphone Samsung Galaxy S21';
$preco = 2999.99;
$descricao = 'Smartphone Samsung Galaxy S21 com tela de 6.2 polegadas';
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->execute();

echo $stmt->rowCount() . ' produto(s) atualizado(s) com sucesso!';
