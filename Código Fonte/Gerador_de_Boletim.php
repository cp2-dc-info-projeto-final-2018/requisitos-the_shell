<!DOCTYPE html>

<?php

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");

$Turmas = ListaTurmas();

$Disciplinas_da_Turma = [];
$Alunos_da_Turma = [];

for ($i = 0; $i <= (count($Turmas) - 1); $i++) {
  $Disciplinas_da_Turma[] = ListaDisciplinasDaTurma($Turmas[$i]["ID_Turma"]);
  $Alunos_da_Turma[] = ListaAlunosDaTurma($Turmas[$i]["ID_Turma"]);
}

?>

<html>

<script>

function SelecionaAluno(ID_Turma)
{
  document.getElementById("Aluno").style.display = "block";
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

  <fieldset>
    <legend>Gerador de Boletim</legend>

    <form method="POST" action="Controlador/Gerar_Boletim.php">
      <div id="Div_Turma">
        <label for="Turma">Turma: </label>
        <select id="Turma" name="Turma" onclick="SelecionaAluno(this.value)">
          <?php for ($i = 0; $i <= (count($Turmas) - 1); $i++) { ?>
            <option value="<?= $Turmas[$i]["ID_Turma"] ?>"><?= $Turmas[$i]["Nome"] ?></option>
          <?php } ?>
        </select>
      </div>

      <br>
      <br>

      <div id="Div_Turma">
        <label for="Aluno">Aluno: </label>
        <select id="Aluno" name="Aluno">
          <?php for ($i = 0; $i <= (count($Alunos_da_Turma[$_POST["Turma"]]) - 1); $i++) { ?>
            <option value="<?= $Alunos_da_Turma["ID_Turma"] ?>"><?= $Turmas["Nome"] ?></option>
          <?php } ?>
        </select>
      </div>

      <br>
      <br>

      <div>
        <label for="Disciplina">Disciplina: </label>
        <select id="Disciplina" name="Disciplina">
          <?php for ($i = 0; $i <= (count($Disciplinas_da_Turma[$_POST["Turma"]]) - 1); $i++) { ?>
            <option value="<?= $Disciplinas_da_Turma["ID_Turma"] ?>"><?= $Disciplinas_da_Turma["Disciplina"] ?></option>
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
