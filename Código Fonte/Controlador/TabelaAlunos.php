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
?>
