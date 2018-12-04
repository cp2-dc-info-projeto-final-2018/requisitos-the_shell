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

function ListaTurmaPorID($ID_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT *
                         FROM turma
                         WHERE id_turma = :id_turma;');

  $SQL -> bindValue("id_turma", $ID_Turma);

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

function ListaAlunosDaTurma($ID_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          usuario.id_usuario AS ID_Usuario,
                          usuario.nome AS Nome,
                          usuario.email AS Email,
                          usuario.tel AS Tel,
                          aluno.matricula AS Matricula,
                          aluno.id_aluno AS ID_Aluno,
                          turma.nome AS Turma
                         FROM aluno
                         LEFT JOIN usuario ON aluno.id_usuario = usuario.id_usuario
                         LEFT JOIN turma ON turma.id_turma = aluno.id_turma
                         WHERE aluno.id_turma = :ID_Turma;');

  $SQL -> bindValue(":ID_Turma", $ID_Turma);

  $SQL -> execute();

  return $SQL -> fetchAll();
}

function ListaIDTurmaPorNome($Nome_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_turma
                         FROM turma
                         WHERE nome = :turma;');

  $SQL -> bindValue(":turma", $Nome_Turma);

  $SQL -> execute();

  return $SQL -> fetch();
}

?>
