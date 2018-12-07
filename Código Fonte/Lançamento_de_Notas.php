<!DOCTYPE html>

<?php

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaTurmas.php");

$ID_Disciplina = $_GET["id_disciplina"];
$ID_Turma = $_GET["id_turma"];

$Disciplina = ListaDisciplinaPorID($ID_Disciplina);
$Turma = ListaTurmaPorID($ID_Turma);

?>


<html>

<head>
  <meta charset="utf-8"/>
  <title>Lançamento de Notas</title>
  <link rel="stylesheet" type="text/css" href="Lançamento_de_Notas.css">
</head>

<body>

	<div id="cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="nome">SHELL - Notas</h2>
	</div>

	<br>
  <br>

	<div id="telanotas">
    <table id="notas" border="2">
		  <tr>
		    <td class="celula_nome">Aluno</td>
			  <td class="celula_notas">1<sup>a</sup> Certificação</td>
				<td class="celula_notas">2<sup>a</sup> Certificação</td>
  			<td class="celula_notas">3<sup>a</sup> Certificação</td>
  			<td class="celula_notas">Média</td>
			</tr>

  		<br>
      <br>

  		<tr>
  			<td bgcolor="#2b2d2d"></td>
  			<td bgcolor="#2b2d2d"></td>
  			<td bgcolor="#2b2d2d"></td>
  			<td bgcolor="#2b2d2d"></td>
  			<td bgcolor="#2b2d2d"></td>
  		</tr>
		</table>

	  <br>
    <br>
    <br>

	  <input id="botaoLanca" type="button" name="lançaNotas" value="Lançar Notas">

	</div>

	<div id="rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
