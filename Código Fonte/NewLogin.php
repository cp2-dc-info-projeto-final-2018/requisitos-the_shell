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
  <meta charset="utf-8"/>
  <title>Página de Login</title>
	<link rel="stylesheet" type="text/css" href="NewLogin.css">
</head>

<body>

	<div id="cabecalho">
		<h2>Colégio Pedro II</h2>
		<h2 id="nome">SHELL - Notas</h2>
	</div>

		<div id="log-acesso">
				<form id="Formulario" method="POST" action="Controlador/Entrar.php">

          <h1 id="H1_Login">Login</h1>

					<label class="nomesCanto">Login</label>
						<br/>
							<input class="txt" name="login" type="text"/>
						<br/><br/>
					<label class="nomesCanto">Senha</label>
						<br/>
							<input class="txt" name="senha" type="password" />
						<br/>
					<label id="nomeMenor"><input name="manterLogado" type="checkbox"/>Manter-me logado.</label>
					<br/><br/>

					<input class="Btn" id="Entrar" type="submit" value="Entrar"/>
					<input class="Btn" id="Esqueci_Senha" type="submit" value="Esqueci minha senha"/> </br></br>

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

	<div id="rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
