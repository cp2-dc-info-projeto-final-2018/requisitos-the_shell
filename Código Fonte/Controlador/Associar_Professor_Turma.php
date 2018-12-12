<?php

session_start();

require_once("TabelaProfessor_Disciplina_Turma.php");

$Request = array_map("trim", $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Professor' => FILTER_DEFAULT,
    'Disciplina' => FILTER_DEFAULT,
    'Turma' => FILTER_DEFAULT
  ]
);

$Erros = [];

if ($Request['Professor'] == "")
{
  $Erros[] = "Professor não selecionado.";
}
else if ($Request['Disciplina'] == "")
{
  $Erros[] = "Disciplina não selecionada.";
}
else if ($Request['Turma'] == "")
{
  $Erros[] = "Turma não selecionada.";
}
else
{
  AssociaProfessorTurma($Request);
}

$_SESSION['Erros'] = $Erros;

header("Location: ../Professor_Disciplina_Turma.php");


?>
