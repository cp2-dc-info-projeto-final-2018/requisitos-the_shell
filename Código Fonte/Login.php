<!DOCTYPE html>

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

				<form method="POST" action="">
					<label class="nomesCanto">Login</label>
						<br/>
							<input name="login" type="text"/>
						<br/><br/>
					<label class="nomesCanto">Senha</label>
						<br/>
							<input name="senha" type="text" />
						<br/>
					<label id="nomeMenor"><input name="manterLogado" type="checkbox"/>Manter-me logado.</label>
					<br/>
					<br/>
					<br/>
					<input type="submit" value="Entrar"/>
					<input type="submit" value="Esqueci minha senha"/>
				</form>

		</div>

	<div class="rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
