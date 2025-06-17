<?php


declare(strict_types=1);

class Produto
{
    
    private string $nome;
    private float $preco;
    private string $descricao;
    private $conexao;

    public function __construct(string $nome, float $preco, string $descricao)
    {
        
       
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        try {
            $this->conexao= new PDO('mysql:host=localhost;dbname=dio-php', 'root', '');
            echo 'Connection successful!';
}
        catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
}
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

    public function list(): void
    {
        //Depois alterar os echos para retornar um array de objetos 
        echo '<h1>Produtos</h1>';
        $sql = 'SELECT id,nome,preco,descricao FROM produtos';

        foreach ($this->conexao->query($sql) as $row) {
            echo '<p>';
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Nome: ' . $row['nome'] . '<br>';
            echo 'Preço: R$' . $row['preco'] . '<br>';
            echo 'Descrição: ' . $row['descricao'] . '<br>';
            echo '</p>';
}
    }
     public function insert():int
    {
        $nome = $this->getNome();
        $preco = $this->getPreco();
        $descricao = $this->getDescricao();
        $sql = 'INSERT INTO produtos (nome, preco, descricao) VALUES (:nome, :preco, :descricao)';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->rowCount() ;
        
    }
        public function update(string $nomeAntigo): int
    {
        $nome = $this->getNome();
        $preco = $this->getPreco();
        $descricao = $this->getDescricao();

        $sql = 'UPDATE produtos SET nome = :nome, preco = :preco, descricao = :descricao WHERE nome = :nomeAntigo';
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->bindParam(':nomeAntigo', $nomeAntigo, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function delete():int
    {

        $nome = $this->getNome();
        // Se quiser deletar por ID, descomente a linha abaixo e comente a linha acima
        // $nome = 'Tablet Samsung Galaxy Tab S7'; // Nome do produto a ser deletado
        // $id = 1; // ID do produto a ser deletado
       //$id = 1; // ID do produto a ser deletado
        $sql = 'DELETE FROM produtos WHERE nome = :nome';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->rowCount() ;
    }
}