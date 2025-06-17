<?php

declare(strict_types=1);
require 'Produto.php';


$produto = new Produto('Macbook air pro m5 max ', 45225, 'Descrição do Produto 3');
//$produto->delete();
//$produto->insert();
$produto->update('Pc');
$produto->list();