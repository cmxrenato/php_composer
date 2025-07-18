<?php
declare(strict_types=1);
require_once 'Conexao.php';

class Produto
{
    private string $nome;
    private float $preco;
    private string $descricao;
    private PDO $conexao;

    public function __construct(string $nome, float $preco, string $descricao)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->conexao = Conexao::conectar();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function listar(): array
    {
        $sql = 'SELECT * FROM produtos ORDER BY nome';
        $stmt = $this->conexao->query($sql);
        return $stmt->fetchAll();
    }
    public function inserir(): int
    {
        $sql = 'INSERT INTO produtos (nome, preco, descricao) VALUES (:nome, :preco, :descricao)';
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':descricao', $this->descricao);

        $stmt->execute();
        return $stmt->rowCount();
    }
    public function atualizar(int $id): int
    {
        $sql = 'UPDATE produtos SET nome = :nome, preco = :preco, descricao = :descricao WHERE id = :id';
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->rowCount();
    }
    public function deletar(int $id): int
    {
        $sql = 'DELETE FROM produtos WHERE id = :id';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
        $stmt->execute();
        return $stmt->rowCount();
    }
}