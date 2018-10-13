<?php
	require_once('../Tabelas/dadosClientes.php');

	$erro = null;

	$request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
	               $request,
	               [ 'email' => FILTER_VALIDATE_EMAIL,
	                 'senha' => FILTER_DEFAULT ]
	           );

	$email = $request['email'];
	$senha = $request['senha'];

	if ($email == false)
	{
		$erro = "E-Mail não informado";
	}
	else if (array_key_exists($email, $dadosClientes) == false)
	{
		$erro = "Nenhum cliente encontrado para este E-Mail";
	}
	else if ($senha == false)
	{
		$erro = "Senha não informada";
	}
	// PENDENTE: Validar senha do usuário
	// PENDENTE: Redirecionar o usuário para a página de pedidos
	else
	{
		$erro = "Senha inválida";
	}

	// PENDENTE: Redirecionar usuário para a página de login com as mensagens de erro a exibir
?>