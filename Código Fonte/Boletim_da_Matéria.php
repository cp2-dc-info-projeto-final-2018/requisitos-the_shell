<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaAlunos.php");

$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

$ID_Disciplina = $_GET["id_disciplina"];

$Disciplina = ListaDisciplinaPorID($ID_Disciplina);

if ($Usuário_Logado['id_classe_usuario'] == 1) {
  $Aluno = $Usuario_Logado;
}
else {
  $ID_Aluno = $_GET['id_aluno'];
  $Aluno = ListaAlunoPorID($ID_Aluno);
}

$Boletim = ListaBoletimDoAluno($Aluno, $ID_Disciplina);

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

  <h3 id="Disciplina"><?= $Disciplina["disciplina"] ?></h3>

  <table id="Boletim">
		<tr>
			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">Média</th>
		</tr>
		<tr class="Linhas">
			<th class="Celulas"><?= $Boletim["pri_cert"] ?></th>
			<th class="Celulas"><?= $Boletim["seg_cert"] ?></th>
			<th class="Celulas"><?= $Boletim["ter_cert"] ?></th>
			<th class="Celulas"><?= $Boletim["Media"] ?></th>
		</tr>
	</table>

	<a id="Botao_Alterar_Notas" href="Alteracao_de_Notas.php">Alterar Notas</a>


	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>

</body>


</html>
