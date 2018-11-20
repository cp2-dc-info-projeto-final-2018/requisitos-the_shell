<?php

function ApuraMedia($dados)
{

  if ($dados['notaA'] == null)
  {
    $dados['mediaAluno'] = $dados['notaT'] + $dados['notaP'];
  }
  else
  {
    $dados['mediaAluno'] = ($dados['notaT'] + $dados['notaP'] + $dados['notaA']) / 10;
  }

}

function ListaBoletimDoAluno($Aluno, $id_Disciplina)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          boletim.prim_cert AS 1cert,
                          boletim.segu_cert AS 2cert,
                          boletim.terc_cert AS 3cert,
                          boletim.media AS media
                         FROM boletim
                         LEFT JOIN aluno ON boletim.id_aluno = aluno.id_aluno
                         RIGHT JOIN usuario ON usuario.id_usuario = aluno.id_usuario
                         LEFT JOIN disciplina ON boletim.id_disciplina = disciplina.id_disciplina
                         WHERE usuario.login = :aluno
                         AND boletim.id_disciplina = :disciplina;');

  $SQL -> bindValue(":aluno", $Aluno);
  $SQL -> bindValue(":disciplina", $id_Disciplina);

  $SQL -> execute();

  return $SQL -> fetch();
}
?>
