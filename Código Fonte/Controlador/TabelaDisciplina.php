<?php

require_once("Conexão_BD.php");

function CadastraDisciplina($Nome_Disciplina)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('INSERT INTO disciplina(disciplina) VALUES
                         (:disciplina);');

  $SQL -> bindValue(":disciplina", $Nome_Disciplina);

  $SQL -> execute();
}

function ListaDisciplinas()
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT *
                       FROM disciplina;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}

function ListaDisciplinaPorID($id_Disciplina)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT *
                         FROM Disciplina
                         WHERE id_disciplina = :id;');

  $SQL -> bindValue(":id", $id_Disciplina);

  $SQL -> execute();

  return $SQL -> fetch();
}

function ListaDiciplinaPorNome($Nome_Disciplina)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_disciplina
                         FROM disciplina
                         WHERE nome = :turma;');

  $SQL -> bindValue(":disciplina", $Nome_Disciplina);

  $SQL -> execute();

  return $SQL -> fetch();
}



?>
