<?php

declare(strict_types=1);
$pdo = require 'conexao.php';

$id = 1; // ID do produto a ser deletado
$sql = 'DELETE FROM produtos WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

echo $stmt->rowCount() . ' produto(s) deletado(s) com sucesso!';