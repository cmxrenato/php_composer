
<?php

function validarUser(array $user)
{

	if (empty($user['codigo']) || empty($user['nome']) || empty($user['idade'])) {
		throw new Exception("Campos obrigatórios não foram preenchidos!");
	}

	return true;
}

$user = [

	'codigo' => 1,
	'nome' => '',
	'idade' => 33,



];

$status = false;

try {
	$status = validarUser($user);
} catch (Exception $e) {
	echo $e->getMessage() . PHP_EOL;
	//die();
} finally {

	echo "Status da operação: " . (int)$status . PHP_EOL;
}

echo "..................EXECUTANDO................." . PHP_EOL;
