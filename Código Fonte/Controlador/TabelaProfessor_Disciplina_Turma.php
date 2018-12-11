<?php

require_once("Conexão_BD.php");

function ListaAulasDoProfessor($ID_Professor)
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

function ListaTurmasDoProfessor($ID_Professor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_turma AS Turma
                         FROM professor_disciplina_turma
                         RIGHT JOIN professor ON professor.id_professor = professor_disciplina_turma.id_professor
                         RIGHT JOIN turma ON turma.id_turma = professor_disciplina_turma.id_turma
                         LEFT JOIN disciplina ON professor_disciplina_turma.id_discipina = disciplina.id_discipina
                         WHERE professor_disciplina_turma.id_professor = :id_professor;');

  $SQL -> bindValue(":id_professor", $ID_Professor);

  return $SQL -> fetchAll();
}

function ListaDisciplinaDoProfessor($ID_Professor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_disciplina AS Disciplina
                         FROM professor_disciplina_turma
                         RIGHT JOIN professor ON professor.id_professor = professor_disciplina_turma.id_professor
                         RIGHT JOIN turma ON turma.id_turma = professor_disciplina_turma.id_turma
                         LEFT JOIN disciplina ON professor_disciplina_turma.id_discipina = disciplina.id_discipina
                         WHERE professor_disciplina_turma.id_professor = :id_professor;');

  $SQL -> bindValue(":id_professor", $ID_Professor);

  return $SQL -> fetchAll();
}

function ListaDisciplinasDaTurma($ID_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_disciplina AS ID_Disciplina
                          disciplina AS Disciplina
                         FROM professor_disciplina_turma
                         RIGHT JOIN professor ON professor.id_professor = professor_disciplina_turma.id_professor
                         RIGHT JOIN turma ON turma.id_turma = professor_disciplina_turma.id_turma
                         LEFT JOIN disciplina ON professor_disciplina_turma.id_discipina = disciplina.id_discipina
                         WHERE professor_disciplina_turma.id_turma = :id_turma;');

  $SQL -> bindValue(":id_turma", $ID_Turma);

  $SQL -> execute();

  return $SQL -> fetchAll();
}

?>
