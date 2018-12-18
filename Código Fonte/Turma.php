<!DOCTYPE html>

<?php

require_once("Controlador/TabelaTurmas.php");

session_start();

$ID_Turma = $_GET['id_turma'];

$Turma = ListaTurmaPorID($ID_Turma);

$Alunos = ListaAlunosDaTurma($ID_Turma);

if (! $Classe_Usuario == 2 && ! $Classe_Usuario == 3) {
  header("Acesso_Negado.php");
}


?>

<html>

<head>
  <meta charset="utf-8">
  <title><?= $Turma['nome'] ?></title>
  <link rel="stylesheet" type="text/css" href="Turma.css">
</head>

<body>

  <div id="Cabecalho">
    <h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
    <h2 id="Nome_do_Software">SHELL - Notas</h2>
  </div>


  <fieldset>
    <legend>Turma <?= $Turma['nome'] ?></legend>

    <table>
        <?php
        for ($i = 0; $i <= (count($Alunos) - 1); $i++) { ?>
          <tr>
            <th><a href="Aluno.php?id_aluno=<?= $Alunos[$i]["ID_Aluno"] ?>"><?= $Alunos[$i]["Nome"]?></a></th>
            <th><?= $Alunos[$i]["Email"]?></th>
            <th><?= $Alunos[$i]["Tel"]?></th>
            <th><?= $Alunos[$i]["Matricula"]?></th>
          </tr>
        <?php } ?>
    </table>
  </fieldset>

  <br>


  <div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
