<?php
	require_once('TabelaContatos.php');

	$request = filter_var_array(
		$_REQUEST,
		[ 'idContato' => FILTER_VALIDATE_INT ]
	);

	$idContato = $request['idContato'];

	if ($idContato != false)
	{
		RemoveContato($idContato);
	}

	// Redireciona o usuário de volta para a agenda:
	header('Location: index.php');
?>