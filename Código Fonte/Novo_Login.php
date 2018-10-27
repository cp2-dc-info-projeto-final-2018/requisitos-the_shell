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
  <link rel="stylesheet" type="text/css" href="Novo_Login.css">
</head>

<body>

	<div class="cabecalho">
		<h1 id="nomeColegio">Colégio Pedro II</h1>
		<h2 id="nomeSoftware"><font face="arial">SHELL</font></h2>
	</div>

  <?php
  if ($Erro != null)
  {
  ?>
  <div id="Exibicao_de_Erro">
    <h3><i>Erro</i></h3>
    <i>
      <?php
        echo $Erro;
      }
      ?>
    </i>
  </div>

	<div id="log-acesso">
		<h1 id="Entrar">Login</h1>
			<form id="log-acesso-form" method="POST" action="Controlador/Entrar.php">
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

				<input class="Botoes" id="Logar" type="submit" value="Entrar"/>
        <br>
				<input class="Botoes" id="Esq_Senha" type="submit" value="Esqueci minha senha"/> </br></br>

			</form>
	</div>

	<div id="rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>
</body>

</html>
