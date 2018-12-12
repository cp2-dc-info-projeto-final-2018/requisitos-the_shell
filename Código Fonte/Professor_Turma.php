<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessores.php");
require_once("Controlador/TabelaTurmas.php");
require_once("TabelaProfessor_Disciplina_Turma.php");

session_start();

$Professores = ListaProfessores();
$Turmas = ListaTurmas();

?>

<html>

<head>
  <title>Professor à turma</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Professor_Turma.css">
</head>

<body>
  <div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
	</div>

  <fieldset>
    <legend>Professor e Turma</legend>

    <form>
      <label for="Professor">Professor</label>

      <select name="Professor">
        <?php for ($i = 0; $i <= (count($Professores) - 1); $i++) { ?>
          <option value="<?= $Professores[$i]["id_professor"] ?>"><?= $Professores[$i]["Nome"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <label for="Turma">Turma</label>
      <select name="Turma">
        <?php for ($i = 0; $i <= (count($Professores) - 1); $i++) { ?>
          <option value="<?= $Turmas[$i]["id_turma"] ?>"><?= $Turmas[$i]["nome"] ?></option>
        <?php } ?>
      </select>
    </form>
  </fieldset>

  <div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>
</body>

</html>
