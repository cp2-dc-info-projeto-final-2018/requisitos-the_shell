<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");
require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaProfessores.php");

$Usuario_Logado = $_SESSION["Usuário"];

$ID_Usuario = $Usuario_Logado['id_usuario'];
$Classe_Usuario = $Usuario_Logado['id_classe'];

if ($Classe_Usuario == 2)
{
  $Professor = ListaAulasDoProfessor($ID_Usuario);
  $Disciplinas = ListaDisciplinasDoProfessor($ID_Usuario);
  $Turmas = ListaTurmasDoProfessor($ID_Usuario);
}
else if ($Classe_Usuario == 3)
{
  $Disciplinas = ListaDisciplinas();
  $Turmas = ListaTurmas();
}
else {
  header("Location: Acesso_Negado.php");
}

var_dump($ID_Usuario);

?>

<script>

var Disciplina_Selecionada = null;

function ExibeTurmas(id_disciplina)
{
  Disciplina_Selecionada = id_disciplina;

  document.getElementById("Turmas").style.display = "block";
}

function VerNotas(id_turma)
{
    location.href = `Boletim_da_Matéria.php?id_turma=${id_turma}&id_disciplina=${Disciplina_Selecionada}`;
}

</script>

<html>

<head>
	<title>Gerenciamento de Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Seleção_de_Boletim.css">
</head>

<body>
	<div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
	</div>

  <br>

  <div id="Turmas_Boletim">
    <table id="Boletim">
  		<tr>
    		<th class="Nome_Coluna">Disciplinas</th>
    	</tr>

  		<?php for ($i = 0; $i <= (count($Disciplinas) - 1); $i++) { ?>
  			<tr class="Linhas">
  				<th class="Celula_Disciplina" onclick="ExibeTurmas(<?= $Disciplinas[$i]["ID_Disciplina"] ?>)"><?= $Disciplinas[$i]["Disciplina"] ?></th>
  			</tr>
  		<?php } ?>
  	</table>

    <table id="Turmas">
      <tr>
        <th class="Nome_Coluna">Turmas</th>
      </tr>
      <?php for ($i = 0; $i <= (count($Turmas) - 1); $i++) { ?>
        <tr class="Linhas">
          <th class="Celula_Turma" onclick="VerNotas(<?= $Turmas[$i]['ID_Turma'] ?>)"><?= $Turmas[$i]['Turma'] ?></th>
        </tr>
      <?php } ?>
    </table>
  </div>

  <br>

	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>

</body>

</html>
