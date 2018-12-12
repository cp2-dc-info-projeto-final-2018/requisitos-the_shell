<?php
$Nome_Turma = $_GET["Nome_Turma"];
$Nome_Turma = $_GET["Serie_Turma"];
$Nome_Turma = $_GET["Integrado_Turma"];


AlteraTurma($Nome_Turma);

header("Location: ../Gerenciamento_de_Turmas.php");

?>
