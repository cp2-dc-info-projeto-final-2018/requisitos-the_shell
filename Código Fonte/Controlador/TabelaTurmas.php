<?php

require_once("Conexão_BD.php");

function CadastraTurma($dados)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('INSERT INTO turma(nome, serie, integrado) VALUES
                          (:nome_turma, :serie_turma, :integrado);');

  $SQL -> bindValue(":nome_turma", $dados["Nome_Turma"]);
  $SQL -> bindValue(":serie_turma", $dados["Serie_Turma"]);
  $SQL -> bindValue(":integrado", $dados["Integrado"]);

  $SQL -> execute();

}

function ListaTurmaPorNome($Info_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT *
                         FROM turma
                         WHERE nome = :Nome_Turma;');

  $SQL -> bindValue("Nome_Turma", $Info_Turma["Nome_Turma"]);

  $SQL -> execute();

  return $SQL -> fetch();
}

function ListaTurmas()
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> query('SELECT *
                       FROM turma;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}

function ListaAlunosDaTurma($Nome_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          usuario.nome,
                          usuario.data_nasc,
                          usuario.email,
                          usuario.tel,
                          aluno.matricula,
                          turma.id_turma,
                          turma.nome,
                          turma.serie
                         FROM aluno
                         LEFT JOIN usuario ON aluno.id_usuario = usuario.id_usuario
                         LEFT JOIN turma ON aluno.id_turma = turma.id_turma
                         WHERE turma.nome = :nome_turma;');

  $SQL -> bindValue(":nome_turma", $Nome_Turma);

  $SQL -> execute();

  return $SQL -> fetchAll();
}


?>
