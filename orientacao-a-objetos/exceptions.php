<?php

function validarUser(array $user)
{

	if (empty($user['codigo']) || empty($user['nome']) || empty($user['idade'])) {

		return false;
	}
	echo "Usuário válido!" . PHP_EOL;
	return true;
}

$user = [

	'codigo' => 1,
	'nome' => '',
	'idade' => 33,



];

$usuarioValido = validarUser($user);

if (!$usuarioValido) {

	echo "Usuário inválido!" . PHP_EOL;
	return false;
}
echo "..................EXECUTANDO.................";
