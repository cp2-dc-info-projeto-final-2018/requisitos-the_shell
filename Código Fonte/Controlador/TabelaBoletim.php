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

  $SQL -> bindValue(":aluno", $Aluno['login']);
  $SQL -> bindValue(":disciplina", $id_Disciplina);

  $SQL -> execute();

  return $SQL -> fetch();
}

function CadastraBoletim($id_Aluno, $id_Disciplina, $Notas)
{
  $BD = CriaConexaoBD();

  $Disciplina = ListaDisciplinaPorID($id_Disciplina);

  $Media = ($Notas["1cert/" . $Disciplina["disciplina"]] * 2 + $Notas["2cert/" . $Disciplina["disciplina"]] * 2 + $Notas["3cert/" . $Disciplina["disciplina"]] * 3) / 10;

  $SQL = $BD -> prepare('INSERT INTO boletim(id_aluno, id_disciplina, prim_cert, segu_cert, terc_cert, media) VALUES
                         (:id_Aluno, :id_Disciplina, :1cert, :2cert, :3cert, :media);');

  $SQL -> bindValue(":id_Aluno", $id_Aluno);
  $SQL -> bindValue(":id_Disciplina", $id_Disciplina);
  $SQL -> bindValue(":1cert", $Notas["1cert/" . $Disciplina["disciplina"]]);
  $SQL -> bindValue(":2cert", $Notas["2cert/" . $Disciplina["disciplina"]]);
  $SQL -> bindValue(":3cert", $Notas["3cert/" . $Disciplina["disciplina"]]);
  $SQL -> bindValue(":media", $Media);

  $SQL -> execute();
}

?>
