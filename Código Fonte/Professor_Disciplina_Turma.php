<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessores.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");

session_start();

$Professores = ListaProfessores();
$Turmas = ListaTurmas();
$Disciplinas = ListaDisciplinas();

$Erros = null;

if (isset($_SESSION['Erros'])) {
    $Erros = $_SESSION['Erros'];
}

unset($_SESSION['Erros']);

?>

<html>

<head>
  <title>Atribuir professor à turma</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Professor_Disciplina_Turma.css">
</head>

<body>
  <div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
	</div>

  <?php if ($Erros != null) { ?>
    <div id="Exibicao_de_Erro">
      <p>
        <?php
          foreach ($Erros as $Erro)
          {
            echo $Erro;
          }
        ?>
        <br>
      </p>
    </div>
  <?php } ?>

  <fieldset>
    <legend>Professor e Turma</legend>

    <form method="POST" action="Controlador/Associar_Professor_Turma.php">
      <label for="Professor">Professor</label>

      <select name="Professor" required>
        <option value=""></option>
        <?php for ($i = 0; $i <= (count($Professores) - 1); $i++) { ?>
          <option value="<?= $Professores[$i]["ID_Professor"] ?>"><?= $Professores[$i]["Nome"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <label for="Disciplina">Disciplina</label>

      <select name="Disciplina" required>
        <option value=""></option>
        <?php for ($i = 0; $i <= (count($Disciplinas) - 1); $i++) { ?>
          <option value="<?= $Disciplinas[$i]["id_disciplina"] ?>"><?= $Disciplinas[$i]["disciplina"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <label for="Turma">Turma</label>

      <select name="Turma" required>
        <option value=""></option>
        <?php for ($i = 0; $i <= (count($Turmas) - 1); $i++) { ?>
          <option value="<?= $Turmas[$i]["id_turma"] ?>"><?= $Turmas[$i]["nome"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <input id="Botao_Enviar" name="Enviar" type="submit" value="Enviar">
    </form>
  </fieldset>

  <div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>
</body>

</html>
