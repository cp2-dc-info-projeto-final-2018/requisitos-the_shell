<!DOCTYPE html>

<?php

require_once("Controlador/TabelaTurmas.php");

$Alunos = ListaAlunosDaTurma($_SESSION["Turma_Escolhida"]);

session_start();

?>

<html>

<head>
  <meta charset="utf-8">
  <title><?= $Turma["nome"] ?></title>
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
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </table>
  </fieldset>


  <div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
