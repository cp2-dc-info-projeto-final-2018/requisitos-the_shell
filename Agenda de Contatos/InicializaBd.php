<?php
// Arquivo para inicializar o banco de dados.
// Deve ser executado uma única vez, quando o banco de dados é criado no SGBD.

require('TabelaContatos.php');


$bd = CriaConexãoBd();


// 1 - Cria a tabela no banco de dados:
$sql = 'CREATE TABLE Contatos(
			id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			nome VARCHAR(255) NOT NULL UNIQUE,
			email VARCHAR(255) UNIQUE,
			tel VARCHAR(50) UNIQUE,
			dataNasc DATE
		)';

$bd->exec($sql);


// 2 - Popula a tabela com alguns contatos iniciais:
$contatosIniciais = [
	[ 'nome' => 'Ana Clara',
	  'tel' => '+55 (21) 2222-2222',
	  'email' => 'anaclara@example.net',
	  'dataNasc' => '1998-02-01' ],

	[ 'nome' => 'Ricardo Almeida',
	  'tel' => '+351 (226) 837-125',
	  'email' => 'ralmeida@example.net',
	  'dataNasc' => '1992-09-27' ],

	[ 'nome' => 'Dalva Santos',
	  'tel' => '+258 (84) 629-4862',
	  'email' => 'santos@example.net',
	  'dataNasc' => '1997-11-16' ]
];

foreach ($contatosIniciais as $contato)
{
	InsereNovoContato($contato);
}

echo 'Banco de dados inicializado com sucesso.';

?>