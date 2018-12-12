<?php

require_once("Conexão_BD.php");

function ListaAulasDoProfessor($ID_Professor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          professor_disciplina_turma.id_turma AS ID_Turma,
                          turma.nome AS Turma,
                          professor_disciplina_turma.id_disciplina AS ID_Disciplina,
                          disciplina.disciplina AS Disciplina
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
                          professor_disciplina_turma.id_turma AS ID_Turma,
                          turma.nome AS Turma
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
                          professor_disciplina_turma.id_disciplina AS ID_Disciplina,
                          professor_disciplina_turma.disciplina AS Disciplina
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
                          professor_disciplina_turma.id_disciplina AS ID_Disciplina,
                          disciplina.disciplina AS Disciplina
                         FROM professor_disciplina_turma
                         RIGHT JOIN professor ON professor.id_professor = professor_disciplina_turma.id_professor
                         RIGHT JOIN turma ON turma.id_turma = professor_disciplina_turma.id_turma
                         LEFT JOIN disciplina ON professor_disciplina_turma.id_disciplina = disciplina.id_disciplina
                         WHERE professor_disciplina_turma.id_turma = :id_turma;');

  $SQL -> bindValue(":id_turma", $ID_Turma);

  $SQL -> execute();

  return $SQL -> fetchAll();
}

function AssociaProfessorTurma($Dados)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('INSERT INTO professor_disciplina_turma(id_professor, id_disciplina, id_turma) VALUES
                         (:id_professor, :id_disciplina, :id_turma);');

  $SQL -> bindValue(":id_professor", $Dados['Professor']);
  $SQL -> bindValue(":id_disciplina", $Dados['Disciplina']);
  $SQL -> bindValue(":id_turma", $Dados['Turma']);

  $SQL -> execute();
}

?>
