<!DOCTYPE html>

<?php

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaBoletim.php");

$ID_Disciplina = $_GET["id_disciplina"];
$ID_Turma = $_GET["id_turma"];

$Disciplina = ListaDisciplinaPorID($ID_Disciplina);
$Turma = ListaTurmaPorID($ID_Turma);
$Alunos_da_Turma = ListaAlunosDaTurma($ID_Turma);

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

  <h3 id="Disciplina"><?= $Disciplina["disciplina"] ?></h3>

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

    <?php
    for ($i = 0; $i <= (count($Alunos_da_Turma) - 1); $i++)
      {
        $ID_Aluno = $Alunos_da_Turma[$i]["ID_Usuario"];

        $Boletim_Aluno = ListaBoletimDoAluno($Alunos_da_Turma[$i]["ID_Usuario"], $ID_Disciplina); ?>

        <form method="POST" action="Controlador/Cadastrar_Notas.php?id_disciplina=<?= $ID_Disciplina ?>&id_aluno=<?= $ID_Aluno ?>&id_turma=<?= $ID_Turma ?>">
    	     <tr>
             <td class="Nome_Aluno"></td>
    		     <td class="Celulas"><input name="Pri_Cert" type="text" value="<?= $Boletim_Aluno["Pri_Cert"] ?>"></td>
    		     <td class="Celulas"><input name="Seg_Cert" type="text" value="<?= $Boletim_Aluno["Seg_Cert"] ?>"></td>
             <td class="Celulas"><input name="Ter_Cert" type="text" value="<?= $Boletim_Aluno["Ter_Cert"] ?>"></td>
             <td class="Celulas">
               <?php if (! empty($Boletim_Aluno["Media"])) {
                 echo $Boletim_Aluno["Media"];
               }
               else {
                 echo "0.0";
               } ?>
             </td>
             <td>
               <input id="Lancar_Notas" type="submit" name="Lancar_Notas" value="Lançar Notas">
             </td>
      	   </tr>
        </form>

    <?php } ?>
	</table>

	<br>
  <br>
  <br>


	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
