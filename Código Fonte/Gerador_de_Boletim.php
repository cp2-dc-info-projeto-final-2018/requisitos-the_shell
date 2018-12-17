<?php

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");

$Erros = null;

$Turmas = ListaTurmas();

$Disciplinas_da_Turma = [];
$Alunos_da_Turma = [];

if (isset($_SESSION['Erros'])) {
    $Erros = $_SESSION['Erros'];
}

unset($_SESSION['Erros']);

//for ($i = 0; $i <= (count($Turmas) - 1); $i++) {
if (empty($_GET['ID_Turma']) == false) {
  $idTurma = $_GET["ID_Turma"];
  $Disciplinas_da_Turma = ListaDisciplinasDaTurma($idTurma);
}

?>

<!DOCTYPE html>

<html>

<script>

function TurmaSelecionada(ID_Turma)
{
  this.location.href = `Gerador_de_Boletim.php?ID_Turma=${ID_Turma}`;
}

</script>

<head>
  <title>Gerador de Boletim</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Gerador_de_Boletim.css" type="text/css">
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

  <fieldset>
    <legend>Gerador de Boletim</legend>

    <form method="POST" action="Controlador/Gerar_Boletim.php">
      <div id="Div_Turma">
        <label for="Turma">Turma: </label>
        <select id="Turma" name="Turma" onchange="TurmaSelecionada(this.value)">
          <option value=""></option>
          <?php
          for ($i = 0; $i <= (count($Turmas) - 1); $i++)
          { ?>
            <option value="<?= $Turmas[$i]["ID_Turma"] ?>"><?= $Turmas[$i]["Nome"] ?></option>
          <?php
          }

          if (empty($_GET["ID_Turma"]) == false)
          { ?>
            <option selected="selected" value="<?= $_GET['ID_Turma'] ?>"><?= ListaTurmaPorID($_GET['ID_Turma'])["nome"] ?></option>
          <?php
          } ?>
        </select>
      </div>

      <br>
      <br>

      <div>
        <label for="Disciplina">Disciplina: </label>
        <select id="Disciplina" name="Disciplina">
          <option value=""></option>
          <?php for ($i = 0; $i <= (count($Disciplinas_da_Turma) - 1); $i++) { ?>
            <option value="<?= $Disciplinas_da_Turma[$i]["ID_Disciplina"] ?>"><?= $Disciplinas_da_Turma[$i]["Disciplina"] ?></option>
          <?php } ?>
        </select>
      </div>

      <br>
      <br>

      <input id="Gerar_Boletim" name="Gerar_Boletim" type="submit" value="Gerar Boletim">
    </form>
  </fieldset>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>
</body>

</html>
