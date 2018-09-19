<?php
	function CriaConexãoBd() : PDO
	{
		$bd = new PDO('mysql:host=localhost;dbname=agenda_contatos;charset=utf8', 'Agenda_Contatos', 'lZ432#w');

		$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $bd;
	}


	// Retorna um vetor com os dados do usuário (ou `false` se não encontrar).
	function ListaContatos()
	{
		$db = CriaConexãoBd();
		if ($db == null)
		{
			return null;
		}

		$resultado = $db->query('SELECT * FROM Contatos ORDER BY nome ASC');

		return $resultado->fetchAll();
		// Retornar diretamente o resultado de `fetchAll()` neste ponto só funciona
		// nesse caso porque nós estamos usando exatamente os mesmos nomes nas
		// colunas da tabela do banco de dados e na nossa aplicação.
	}

	function InsereNovoContato(array $novoContato)
	{
		// Nós precisávamos validar os valores recebidos nos parâmetros da função,
		// uma vez que os estamos recebendo como um vetor qualquer (que pode conter
		// quaisquer chaves e valores, sem nenhuma restrição). Nós não o faremos
		// apenas para deixar o exemplo simples. Contamos, assim, com que o
		// invocador desta função tenha se responsabilizado em fazer todas as
		// validações necessárias corretamente.
		// O ideal seria, na verdade, criar uma classe Contato (que conteria todas
		// as validações) e trocar o tipo do parâmetro desta função para receber um
		// objeto dessa classe.

		$db = CriaConexãoBd();

		$cmdSql = $db->prepare(
			'INSERT INTO Contatos (nome, tel, email, dataNasc)
			 VALUES (:nome, :tel, :email, :dataNasc)'
		);

		$cmdSql->bindValue(':nome', $novoContato['nome']);
		$cmdSql->bindValue(':tel', $novoContato['tel']);
		$cmdSql->bindValue(':email', $novoContato['email']);
		$cmdSql->bindValue(':dataNasc', $novoContato['dataNasc']);

		$cmdSql->execute();
	}
?>