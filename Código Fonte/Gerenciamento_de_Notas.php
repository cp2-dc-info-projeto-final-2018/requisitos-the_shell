<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");

$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

if ($Usuario_Logado["id_classe"] = 1) {
	$Aluno = $Usuario_Logado;
}

?>

<html>

<head>
	<title>Gerenciamento de Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Gerenciamento_de_Notas.css">
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
				<th class="Celulas"><?= $Disciplinas[$i]["disciplina"] ?></th>
				<th class="Celulas"><?= $Boletim["1cert"] ?></th>
				<th class="Celulas"><?= $Boletim["2cert"] ?></th>
				<th class="Celulas"><?= $Boletim["3cert"] ?></th>
				<th class="Celulas"><?= $Boletim["media"] ?></th>
			</tr>

		<?php } ?>
	</table>

	<a id="Botao_Alterar_Notas" href="Alteracao_de_Notas.php">Alterar Notas</a>

	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>

</body>

</html>
