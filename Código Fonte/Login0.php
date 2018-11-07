<!DOCTYPE html>

<html>

<?php

session_start();

$Erro = null;

if (isset($_SESSION['Erro'])) {
    $Erro = $_SESSION['Erro'];
}

unset($_SESSION['Erro']);

?>

<head>
  <meta charset="utf-8"/>
  <title>Página de Login</title>
  <link rel="stylesheet" type="text/css" href="Login.css">
</head>

<body>

	<div id="cabecalho">
		<h1 id="nomeColegio">Colégio Pedro II</h1>
		<h2><font face="arial">SHELL - Notas</font></h2>
	</div>

	<div id="log-acesso">
		<h1 id="Entrar">Login</h1>
			<form id="log-acesso-form" method="POST" action="">
				<label class="nomesCanto">Usuário</label>
					<br/>
						<input id="Login" name="login" type="text"/>
					<br/><br/>
				<label class="nomesCanto">Senha</label>
					<br/>
						<input id="Senha" name="senha" type="password" />
					<br/>
				<label id="nomeMenor">
          <input name="manterLogado" type="checkbox"/>Manter-me logado.
        </label>
				<br/><br/>

				<input class="Botoes" type="submit" value="Entrar"/>
				<input class="Botoes" type="submit" value="Esqueci minha senha"/> </br></br>

			</form>
	</div>

  <div id="Exibição_de_Erro">

    <?php
    if ($Erro != null)
    {
        echo $Erro;
    }
    ?>

  </div>

	<div id="rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>
</body>

</html>
