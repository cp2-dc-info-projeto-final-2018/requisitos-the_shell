<!DOCTYPE html>

<?php

session_start();
$Erros = null;
if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

?>

<html>

<head>
  <meta charset="utf-8"/>
  <title>Página de Cadastro</title>
  <link rel="stylesheet" href="Cadastro.css" type="text/css">
</head>

<body>

	<div id="Cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL</h2>
	</div>

  <?php if ($Erros != null) { ?>

  <div id="Exibicao_de_Erro">
    <p>
      <?php
        if ($Erros != null)
        {
          foreach ($Erros as $Erro)
          {
            echo $Erro;
          }

          unset($Erro);
        }
      ?>
      <br>
    </p>
  </div>

  <?php } ?>

	<div id="Div_Cadastro">
		<legend>Cadastro</legend>

		<form class="fonte" method="POST" action="Controlador/Cadastrar_Usuario.php">
      <fieldset>
        <label for="Login">Login: </label>
				<input type="text" name="Login" size="25" required>

				<label for="Nome">Nome: </label>
				<input type="text" name="Nome" size="25" required>

				<br/>
        <br/>

        <label for="Tel">Telefone: </label>
        <input type="text" name="Tel" required>

        <br/>
        <br/>

				<label for="Data_Nasc">Data de Nascimento: </label>
        <input type="date" name="Data_Nasc" required>

				<br/>
        <br/>

				<label for="Email">E-mail: </label>
				<input type="text" name="Email" size="30" maxlength="50" required>

				<br/>
        <br/>

				<label for="Senha">Digite uma senha: </label>
				<input type="password" name="Senha" required>

				<label for="Confirmar_Senha">Confirmar senha: </label>
			  <input type="password" name="Confirmar_Senha" required>
	    </fieldset>

	    <br/>

	    <fieldset>
	      <legend>Especificação de Cadastro</legend>

        <INPUT TYPE="radio" NAME="Classe" VALUE="1"> Alunos</input>
			  <INPUT TYPE="radio" NAME="Classe" VALUE="2"> Professores</input>
			  <INPUT TYPE="radio" NAME="Classe" VALUE="3"> Direção</input>
			  <INPUT TYPE="radio" NAME="Classe" VALUE="4"> Secretaria</input>
			  <INPUT TYPE="radio" NAME="Classe" VALUE="5"> SESOP/NAPNE</input>
      </fieldset>

      <br/>

      <input id="Botao_Cadastrar" type="submit" name="Botao_Enviar" value="Cadastrar">
	  </form>
  </div>

	<br/>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
