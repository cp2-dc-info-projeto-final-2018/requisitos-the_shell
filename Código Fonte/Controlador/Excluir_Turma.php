<?php

require_once("TabelaTurmas.php");

$ID_Turma = $_GET["id_turma"];

RemoveTurma($ID_Turma);

header("Location: ../Gerenciamento_de_Turmas.php");

?>
