<?php
//Código útil para mostrar onde está o erro.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Blog.php';

if (!class_exists('Blog')) {
	die('Classe Blog não foi carregada corretamente');
}
// Inserir um comentário
//$comentario = new Blog('Maria', 'Esse é meu primeiro comentário no blog!');
//$comentario->inserir();
//echo "Comentário inserido com sucesso!";


// Atualizar um comentário (exemplo com id = 1)
$comentarioAtualizado = new Blog('Renato Leal', 'Comentário atualizado com sucesso!');
//$comentarioAtualizado->atualizar(1);
//echo "Comentário atualizado!\n";

// Deletar um comentário (exemplo com id = 1)
$comentarioAtualizado->deletar(1);
echo "Comentário deletado!\n";
// Listar comentários
$lista = $comentarioAtualizado->listar();
print_r($lista);
