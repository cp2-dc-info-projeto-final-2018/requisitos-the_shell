<?php

require_once("TabelaBoletim.php");
require_once("TabelaProfessor_Disciplina_Turma.php");

$Request = array_map("trim", $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    "ID_Aluno" => FILTER_VALIDATE_INT,
    "ID_Disciplina" => FILTER_VALIDATE_INT
  ]
);

$ID_Aluno = $Request["ID_Aluno"];
$ID_Disciplina = $Request["ID_Disciplina"];

if ($ID_Aluno == null) {
  $Erros[] = "Aluno não selecionado."
}
else if ($ID_Disciplina == null) {
  $Erros[] = "Disciplina não selecionada."
}

if (empty($Erros)) {
  GeraBoletim($ID_Aluno, $ID_Disciplina);
}

header("Location: ../Gerador_de_Boletim.php");

?>
