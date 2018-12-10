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
		<h2 id="Nome_do_Software">SHELL - Notas</h2>
	</div>

	<br>
  <br>

  <table id="Boletim" border="2">
		 <tr>
		   <td id="Nome_Coluna_Aluno" class="Nome_Coluna">Aluno</td>
			 <td class="Nome_Coluna">1<sup>a</sup> Certificação</td>
			<td class="Nome_Coluna">2<sup>a</sup> Certificação</td>
  		<td class="Nome_Coluna">3<sup>a</sup> Certificação</td>
  		<td class="Nome_Coluna">Média</td>
		</tr>

  	<br>
    <br>

  	<tr>
  		<td class="Nome_Aluno"></td>
  		<td class="Celulas"><input name="Pri_Cert" type="number"></td>
  		<td class="Celulas"><input name="Seg_Cert" type="number"></td>
  		<td class="Celulas"><input name="Ter_Cert" type="number"></td>
  		<td class="Celulas">
        <?php if (array_key_exists($Boletim[$i]["Média"])) {
          echo $Boletim[$i]["Média"];
        }
        else {
          echo "0.0";
        } ?>
      </td>
  	</tr>
	</table>

	<br>
  <br>
  <br>

  <input id="botaoLanca" type="button" name="lançaNotas" value="Lançar Notas">


	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
