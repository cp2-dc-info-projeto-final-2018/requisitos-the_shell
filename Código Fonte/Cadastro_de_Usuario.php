<!DOCTYPE html>

<?php

require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaDisciplina.php");
session_start();

$Erros = null;
if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

$Turmas = ListaTurmas();
$Disciplinas = ListaDisciplinas();

?>

<script>

function ExibeExtraInfo(Valor)
{
  if (Valor == "1")
  {
    document.getElementById("Aluno").style.display = "block";
    document.getElementById("Professor").style.display = "none";
    document.getElementById("Secretaria").style.display = "none";
  }
  else if (Valor == "2")
  {
    document.getElementById("Aluno").style.display = "none";
    document.getElementById("Professor").style.display = "block";
    document.getElementById("Secretaria").style.display = "none";
  }
  else if (Valor == "3")
  {
    document.getElementById("Aluno").style.display = "none";
    document.getElementById("Professor").style.display = "none";
    document.getElementById("Secretaria").style.display = "block";
  }
  else if (Valor == "")
  {
    document.getElementById("Aluno").style.display = "none";
    document.getElementById("Professor").style.display = "none";
    document.getElementById("Secretaria").style.display = "none";
  }
}

</script>

<html>

<head>
  <meta charset="utf-8"/>
  <title>Página de Cadastro</title>
  <link rel="stylesheet" href="Cadastro_de_Usuario.css" type="text/css">
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

        <select name="Classe" id="Selecionar_Classe" onchange="ExibeExtraInfo(this.value)">
          <option value=""></option>
          <option value="1">Aluno</option>
          <option value="2">Professor</option>
          <option value="3">Secretaria</option>
        </select>

        <br>

        <div id="Aluno">
          <br>
          Matrícula: <input class="Digitar_Extra_Info" type="text" name="Matricula">
          <br>
          Turma:
          <select name="Turma" id="Selecionar_Turma">
            <option value=""></option>

            <?php for ($i = 0; $i <= (count($Turmas) - 1) ; $i++) { ?>

              <option value="<?= $Turmas[$i]["ID_Turma"] ?>"><?= $Turmas[$i]["Nome"] ?></option>

            <?php } ?>

          </select>
        </div>

        <div id="Professor">
          <br>
          Siape: <input class="Digitar_Extra_Info" type="text" name="Siape_Professor">
          <br>
        </div>

        <div id="Secretaria">
          <br>
          Siape: <input class="Digitar_Extra_Info" type="text" name="Siape_Secretaria">
        </div>

      </fieldset>

      <br>

      <input id="Botao_Cadastrar" type="submit" name="Botao_Enviar" value="Cadastrar">
	  </form>
  </div>

	<br>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
