<?php

require_once("Conexão_BD.php");

function CadastraTurma($dados)
{
  $BD = CriaConexaoBD();

  $SQL = $SQL -> prepare('INSERT INTO turma(nome, serie) VALUES
                          (:nome_turma, :serie_turma);');

  $SQL -> bindValue(":nome_turma", $dados["Nome_Turma"]);
  $SQL -> bindValue(":serie_turma", $dados["Serie_Turma"]);

  $SQL -> execute();

}

function ListaTurmaPorNome($Info_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT *
                         FROM turma
                         WHERE nome = :Nome_Turma');

  $SQL -> bindValue("Nome_Turma", $Info_Turma["Nome_Turma"]);

  $SQL -> execute();

  return $SQL -> fetch();
}


?>
