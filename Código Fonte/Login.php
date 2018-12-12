<!DOCTYPE html>

<html>

<?php

session_start();

$Erro = null;

if (isset($_SESSION['Erro'])) 
{
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

	<div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
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

	<div id="Login-Acesso">
		<h1 id="Entrar">Login</h1>
			<form id="Login-Acesso-Form" method="POST" action="Controlador/Entrar.php">
				<label class="Label_Informaçoes">Usuário</label>
					<br/>
						<input id="Login" name="Login" type="text"/>
					<br/><br/>
				<label class="Label_Informaçoes">Senha</label>
					<br/>
						<input id="Senha" name="Senha" type="password" />
					<br/>
				<label id="Label_Manter_Logado">
          <input name="manterLogado" type="checkbox"/>Manter-me logado.
        </label>
				<br/><br/>

				<input class="Botoes" id="Logar" type="submit" value="Entrar"/>

        <br>
				<input class="Botoes" id="Esq_Senha" type="submit" value="Esqueci minha senha"/> </br></br>

			</form>
	</div>

	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>
</body>

</html>
