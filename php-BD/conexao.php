<?php

declare(strict_types=1);

$pdo = null;
try {
    $pdo = new PDO('mysql:host=localhost;dbname=dio-php', 'root', '');
    echo 'Connection successful!';
}
catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

return $pdo;
