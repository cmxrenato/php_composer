<?php

declare(strict_types=1);
require_once 'Conexao.php';
class Blog
{

	private string $nome;
	private string $comentario;
	private PDO $conexao;

	public function __construct(string $nome, string $comentario)
	{

		$this->nome = $nome;
		$this->comentario = $comentario;
		$this->conexao = Conexao::conectar();
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getComentario()
	{
		return $this->comentario;
	}

	public function listar(): array
	{
		$sql = 'SELECT * FROM comentarios';
		$posts = [];
		foreach ($pdo->query($sql) as $key => $value) {
			array_push($posts, $value);
		}

		return $posts;
	}
}
