<!DOCTYPE html>

<?php

require_once("Controlador/TabelaTurmas.php");

session_start();

$ID_Turma = ListaIDTurmaPorNome($_SESSION["Turma_Escolhida"]);

$Alunos = ListaAlunosDaTurma($ID_Turma["id_turma"]);

?>

<html>

<head>
  <meta charset="utf-8">
  <title><?= $_SESSION["Turma_Escolhida"] ?></title>
  <link rel="stylesheet" type="text/css" href="Turma.css">
</head>

<body>

  <div id="Cabecalho">
    <h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
    <h2 id="Nome_do_Software">SHELL - Notas</h2>
  </div>


  <fieldset>
    <legend>Turma <?= $_SESSION["Turma_Escolhida"] ?></legend>

    <table>
      <tr>
        <?php
        for ($i = 0; $i <= (count($Alunos) - 1); $i++) { ?>
          <th><?= $Alunos[$i]["nome"]?></th>
          <th><?= $Alunos[$i]["email"]?></th>
          <th><?= $Alunos[$i]["tel"]?></th>
          <th><?= $Alunos[$i]["matricula"]?></th>
        <?php } ?>
      </tr>
    </table>
  </fieldset>

  <br>

  <a href="Gerenciamento_de_Notas.php">Gerenciamento_de_Notas</a>


  <div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
