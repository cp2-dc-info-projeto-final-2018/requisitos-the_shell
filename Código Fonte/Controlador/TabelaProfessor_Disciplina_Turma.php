<?php

require_once("Conexão_BD.php");

function ListaInfoDoProfessor($ID_Professor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_turma AS Turma,
                          id_disciplina AS Disciplina
                         FROM professor_disciplina_turma
                         RIGHT JOIN professor ON professor.id_professor = professor_disciplina_turma.id_professor
                         RIGHT JOIN turma ON turma.id_turma = professor_disciplina_turma.id_turma
                         LEFT JOIN disciplina ON professor_disciplina_turma.id_discipina = disciplina.id_discipina
                         WHERE professor_disciplina_turma.id_professor = :id_professor;');

  $SQL -> bindValue(":id_professor", $ID_Professor);

  $SQL -> execute();

  return $SQL -> fetchAll();
}


?>
