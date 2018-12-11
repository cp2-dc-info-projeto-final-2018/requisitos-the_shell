<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaTurmas.php");

#$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

$ID_Disciplina = $_GET["id_disciplina"];
$ID_Turma = $_GET["id_turma"];

$Notas_da_Turma = ListaNotasDaTurma($ID_Disciplina, $ID_Turma);

$Disciplina = ListaDisciplinaPorID($ID_Disciplina);
var_dump($Disciplina);
$Turma = ListaTurmaPorID($ID_Turma);

?>

<html>

<head>
  <meta charset="utf-8">
  <title>Alterar notas</title>
  <link rel="stylesheet" href="Boletim_da_Matéria.css" type="text/css">
</head>

<body>
	<div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
	</div>

  <h3 id="Disciplina"> <?= $Disciplina["disciplina"] ?> </h3>

  <table id="Boletim">
		<tr>
      <th class="Nome_Coluna">Aluno</th>
			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">Média</th>
		</tr>
    <?php for ($i = 0; $i <= (count($Notas_da_Turma) - 1); $i++) { ?>

      <tr class="Linhas">
        <th class="Celulas"><a> <?= $Notas_da_Turma[$i]["Nome"] ?></a></th>
			  <th class="Celulas"> <?= $Notas_da_Turma[$i]["Pri_Cert"] ?></th>
			  <th class="Celulas"> <?= $Notas_da_Turma[$i]["Seg_Cert"] ?></th>
        <th class="Celulas"> <?= $Notas_da_Turma[$i]["Ter_Cert"] ?></th>
			  <th class="Celulas"> <?= $Notas_da_Turma[$i]["Media"] ?></th>
		  </tr>

    <?php } ?>


	</table>

	<a id="Botao_Alterar_Notas" href="Lançamento_de_Notas.php?id_disciplina=<?= $Disciplina['disciplina'] ?>&id_turma=<?= $Turma['id_turma'] ?>">Alterar Notas</a>


	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>

	#tela de selecçao 

</body>


</html>
