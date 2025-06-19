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

	public function getNome(): string
	{
		return $this->nome;
	}

	public function getComentario(): string
	{
		return $this->comentario;
	}

	public function listar(): array
	{
		$sql = 'SELECT * FROM comentarios ORDER BY data_comentario DESC';
		$stmt = $this->conexao->query($sql);
		return $stmt->fetchAll();
	}

	public function inserir(): int
	{
		$sql = 'INSERT INTO comentarios (nome, comentario) VALUES (:nome, :comentario)';
		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(':nome', $this->nome);
		$stmt->bindValue(':comentario', $this->comentario);

		$stmt->execute();
		return $stmt->rowCount();
	}

	public function atualizar(int $id): int
	{
		$sql = 'UPDATE comentarios SET nome = :nome, comentario = :comentario WHERE id = :id';
		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(':nome', $this->nome);
		$stmt->bindValue(':comentario', $this->comentario);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);

		$stmt->execute();
		return $stmt->rowCount();
	}

	public function deletar(int $id): int
	{
		$sql = 'DELETE FROM comentarios WHERE id = :id';
		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(':id', $id, PDO::PARAM_INT);

		$stmt->execute();
		return $stmt->rowCount();
	}
}
