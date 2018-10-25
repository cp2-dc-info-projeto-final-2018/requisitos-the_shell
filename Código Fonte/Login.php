<!DOCTYPE html>

<?php

session_start();

$Erro = null;

if (isset($_SESSION['Erro'])) {
    $Erro = $_SESSION['Erro'];
}

unset($_SESSION['Erro']);

?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="Login.css"/>
  <meta charset="utf-8"/>
  <title>Página de Login</title>
</head>

<body>

	<div class="cabecalho">
		<h2>Colégio Pedro II</h2>
		<h2 id="nome">SHELL - Notas</h2>
	</div>

		<div id="log-acesso">
			<h1></h1>
				<form method="POST" action="Controlador/Entrar.php">
					<label class="nomesCanto">Login</label>
					<br/>
						<input name="Login" type="text"/>
					<br/>
					<br/>
					<label class="nomesCanto">Senha</label>
					<br/>
						<input name="Senha" type="text"/>
					<br/>
					<label id="nomeMenor"><input name="ManterLogado" type="checkbox"/>Manter-me logado.</label>
					<br/>
					<br/>
					<br/>
					<input type="submit" value="Entrar"/>
					<input type="submit" value="Esqueci minha senha"/>
				</form>
		</div>

		<div class="Exibição_de_Erro">
			<?php
			if ($Erro != null)
			{
					echo $Erro;
			}
			?>
		</div>

	<div class="rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
