<?php

declare(strict_types=1);




class Conexao
{
	public static function conectar(): PDO
	{
		try {
			return new PDO('mysql:host=localhost;dbname=dio-php', 'root', '', [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			]);
		} catch (PDOException $e) {
			die('Erro na conexão: ' . $e->getMessage());
		}
	}
}
/*✔️ O que está acontecendo aqui?
class Conexao: Estamos criando uma classe chamada Conexao para centralizar toda a conexão com o banco de dados.

Método static conectar():

Por que static?
Porque queremos acessar este método sem precisar instanciar a classe. Ou seja, podemos chamar diretamente:
Conexao::conectar();

Dentro do try, criamos a conexão PDO:

'mysql:host=localhost;dbname=dio-php':
Diz que estamos usando MySQL, com servidor localhost e banco dio-php.

'root': Usuário do banco.

'': Senha do banco (vazia nesse caso).

Array de opções PDO:

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION:
Ativa o modo de exceções para erros. Se der erro no banco, ele lança uma exceção.

PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC:
Faz com que as consultas retornem os resultados como arrays associativos (['nome' => 'Produto A']) e não como arrays numéricos.

PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8":
Garante que o banco use UTF-8 (acentos e caracteres especiais).

Se der algum erro, o catch captura e encerra o script exibindo a mensagem:
Erro na conexão: ...
 *
 *
 *
 *
 * */
