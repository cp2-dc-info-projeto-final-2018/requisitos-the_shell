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

  $SQL = $BD -> query('SELECT *
                       FROM disciplina;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}



?>
