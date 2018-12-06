<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");

$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

if ($Usuário_Logado['id_classe_usuario'] == 1) {
  $Aluno = $Usuario_Logado;
}
else {
  $ID_Aluno = $_GET['id_aluno'];
  $Aluno = ListaAlunoPorID($ID_Aluno);
}

?>

<html>

<head>
	<title>Gerenciamento de Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Boletim.css">
</head>

<body>
	<div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
	</div>

	<table id="Boletim">
		<tr>
			<th class="Nome_Coluna">Disciplina</th>
			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">Média</th>
		</tr>
		<?php
		for ($i = 0; $i <= (count($Disciplinas) - 1); $i++)
		{
			$Boletim = ListaBoletimDoAluno($Aluno, $Disciplinas[$i]["id_disciplina"]);
		?>
			<tr class="Linhas">
				<th class="Celula_Disciplina" onclick="location.href='Boletim_da_Matéria.php?id_disciplina=<?= $Disciplinas[$i]["id_disciplina"] ?>'"><?= $Disciplinas[$i]["disciplina"] ?></th>
				<th class="Celulas"><?= $Boletim["pri_cert"] ?></th>
				<th class="Celulas"><?= $Boletim["seg_cert"] ?></th>
				<th class="Celulas"><?= $Boletim["ter_cert"] ?></th>
				<th class="Celulas"><?= $Boletim["Media"] ?></th>
			</tr>

		<?php } ?>
	</table>

	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>

</body>

</html>
