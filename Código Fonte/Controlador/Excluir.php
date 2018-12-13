<?php

require_once("TabelaDisciplina.php");
require_once("TabelaTurmas.php");

$FunçãoRemover = $_GET['excluir'];

if ($FunçãoRemover == 'turma')
{
  $ID_Turma = $_GET["id_turma"];

  RemoveTurma($ID_Turma);

  header("Location: ../Gerenciamento_de_Turmas.php");
}
else if ($FunçãoRemover == 'disciplina')
{
  $ID_Disciplina = $_GET["id_disciplina"];

  RemoveDisciplina($ID_Disciplina);

  header("Location: ../Gerenciamento_de_Disciplina.php");
}


?>
