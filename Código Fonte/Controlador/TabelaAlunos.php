<?php

function CadastraAluno($ID_Usuario, $dadosNovoAluno)
{
  $BD = CriaConexaoBD();
  
  $SQL = $BD -> prepare('INSERT INTO aluno(id_usuario, matricula, id_classe_usuario, id_turma) VALUES
                         (:id, :matricula, 1, :id_turma);');

  $SQL -> bindValue(':id', $ID_Usuario);
  $SQL -> bindValue(':matricula', $dadosNovoAluno["Matricula"]);
  $SQL -> bindValue(':id_turma', $dadosNovoAluno["Turma"]);

  $SQL -> execute();
}

function ListaAlunoPorID($ID_Aluno)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          usuario.login AS Login,
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

function ListaInfoAluno($Login)
{
  $BD = CriaConexaoBD();

  $Info_Usuario = $BD -> query('SELECT
                                  usuario.login AS Login,
                                  usuario.nome AS Nome,
                                  usuario.senha AS Senha,
                                  usuario.email AS Email,
                                  usuario.tel AS Tel,
                                  usuario.data_nasc AS "Data de Nascimento",
                                  classe.classe AS Classe,
                                  aluno.matricula AS Matrícula
                                FROM usuario
                                WHERE login = :login
                                LEFT JOIN classe
                                ON usuario.id_classe_usuario = classe.id_classe
                                LEFT JOIN aluno
                                ON aluno.id_classe_usuario = classe.id_classe');

  $Info_Usuario -> bindValue(':login', $Login);

  $Info_Usuario -> execute();

   return $Info_Aluno = $Info_Usuario -> fetch();
}
?>
