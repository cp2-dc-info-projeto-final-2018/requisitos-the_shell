<?php

function CadastraAluno($dadosNovoAluno)
{
  $BD = CriaConexaoBD();

  $id = CadastraUsuario($dadosNovoAluno);

  $SQL = $BD -> prepare('INSERT INTO aluno(id_usuario, matricula, id_classe) VALUES
                         (:id, :matricula, 1);');

  $SQL -> bindValue(':id', $dadosNovoAluno["id_aluno"]);
  $SQL -> bindValue(':matricula', $dadosNovoAluno["Matricula"]);

  $SQL -> execute();
}

function ListaAlunoPorID($ID_Aluno)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          aluno.id_usuario AS ID_Usuario,
                          usuario.nome AS Nome,
                          usuario.data_nasc AS Data_Nasc,
                          usuario.email AS Email,
                          usuario.tel AS Tel,
                          aluno.id AS ID_Aluno,
                          aluno.matricula AS Matricula
                         FROM aluno
                         LEFT JOIN usuario ON aluno.id_usuario = usuario.id_usuario
                         WHERE id_aluno = :id_aluno;');

  $SQL -> bindValue(":id_aluno", $ID_Aluno);

  return $SQL -> fetch();
}
?>
