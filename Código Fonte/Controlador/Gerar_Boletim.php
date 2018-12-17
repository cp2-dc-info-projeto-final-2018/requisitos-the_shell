<?php

require_once("TabelaBoletim.php");
require_once("TabelaProfessor_Disciplina_Turma.php");

$Request = array_map("trim", $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    "Turma" => FILTER_DEFAULT,
    "Disciplina" => FILTER_DEFAULT
  ]
);

$ID_Turma = $Request["Turma"];
$ID_Disciplina = $Request["Disciplina"];

if ($ID_Turma == null) {
  $Erros[] = "Turma não selecionado.";
}
else if ($ID_Disciplina == null) {
  $Erros[] = "Disciplina não selecionada.";
}

if (empty($Erros)) {
  GeraBoletimDaTurma($ID_Turma, $ID_Disciplina);
}

header("Location: ../Gerador_de_Boletim.php");

?>
