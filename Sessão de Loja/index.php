<?php
	session_start();

	if (empty($_SESSION['cliente']) == false)
	{
		header('Location: pedidos.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Livraria CPII - Identificar-se</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<nav class="navbar navbar-dark bg-dark">
				<h1 class="navbar-brand">Livraria CPII</h1>
			</nav>

		<h1>Bem-vindo à Livraria CPII</h1>
		<p>Por favor, identifique-se:</p>

		<?php
			if (empty($_SESSION['erro']) == false)
			{
		?>
				<div class="alert alert-warning">
					<p>Erro: <?= $_SESSION['erro'] ?></p>
				</div>
		<?php
				unset($_SESSION['erro']);
			}
		?>

		<form method="POST" action="Controladores/entrar.php">
			<div class="form-group">
				<label>E-mail: <input name="email" type="email" required placeholder="jpsilva@example.net" class="form-control"/></label>
			</div>
			<div class="form-group">
				<label>Senha: <input name="senha" type="password" required minlength="6" maxlength="12" placeholder="******" class="form-control"/></label>
			</div>
			<input type="submit" value="Entrar"/>
		</form>
	</div>
</body>
</html>