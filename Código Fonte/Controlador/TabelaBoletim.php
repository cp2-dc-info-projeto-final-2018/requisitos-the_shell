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

function ListaBoletimDoAluno($id_Aluno, $id_Disciplina)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          usuario.id_usuario AS ID_Aluno,
                          usuario.nome AS Aluno,
                          disciplina.id_disciplina AS ID_Disciplina,
                          disciplina.disciplina AS Disciplina,
                          boletim.primeira_cert AS Pri_Cert,
                          boletim.segunda_cert AS Seg_Cert,
                          boletim.terceira_cert AS Ter_Cert,
                          boletim.media AS Media
                         FROM boletim
                         LEFT JOIN boletim ON aluno.id_boletim = boletim.id_boletim
                         RIGHT JOIN usuario ON usuario.id_usuario = aluno.id_aluno
                         LEFT JOIN disciplina ON boletim.id_disciplina = disciplina.id_disciplina
                         WHERE aluno.id_aluno = :aluno
                         AND boletim.id_disciplina = :disciplina;');

  $SQL -> bindValue(":aluno", $id_Aluno);
  $SQL -> bindValue(":disciplina", $id_Disciplina);

  $SQL -> execute();

  return $SQL -> fetch();
}

function CadastraBoletim($id_Aluno, $id_Disciplina, $Notas)
{
  $BD = CriaConexaoBD();

  $Disciplina = ListaDisciplinaPorID($id_Disciplina);

  $Media = ($Notas["1cert/" . $Disciplina["disciplina"]] * 2 + $Notas["2cert/" . $Disciplina["disciplina"]] * 2 + $Notas["3cert/" . $Disciplina["disciplina"]] * 3) / 10;

  $SQL = $BD -> prepare('INSERT INTO boletim(id_aluno, id_disciplina, primeira_cert, segunda_cert, terceira_cert, media) VALUES
                         (:id_Aluno, :id_Disciplina, :1cert, :2cert, :3cert, :media);');

  $SQL -> bindValue(":id_Aluno", $id_Aluno);
  $SQL -> bindValue(":id_Disciplina", $id_Disciplina);
  $SQL -> bindValue(":1cert", $Notas["1cert/" . $Disciplina["disciplina"]]);
  $SQL -> bindValue(":2cert", $Notas["2cert/" . $Disciplina["disciplina"]]);
  $SQL -> bindValue(":3cert", $Notas["3cert/" . $Disciplina["disciplina"]]);
  $SQL -> bindValue(":media", $Media);

  $SQL -> execute();
}

function EscolheDisciplinaTurma($id_Disciplina, $id_Turma)
{
  $BD = CriaConexaoBD();
}

function ListaNotasDaTurma($ID_Disciplina, $ID_Turma)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          usuario.id_usuario AS ID_Usuario,
                          usuario.nome AS Nome,
                          aluno.matricula AS Matricula,
                          aluno.id_turma AS ID_Turma,
                          boletim.id_disciplina AS ID_Disciplina,
                          boletim.primeira_cert AS Pri_Cert,
                          boletim.segunda_cert AS Seg_Cert,
                          boletim.terceira_cert AS Ter_Cert,
                          boletim.media AS Media
                         FROM boletim
                         JOIN usuario ON boletim.id_aluno = usuario.id_usuario
                         JOIN aluno ON boletim.id_aluno = aluno.id_aluno
                         WHERE aluno.id_turma = :turma
                         AND boletim.id_disciplina = :id_disciplina;');

    $SQL -> bindValue(":turma", $ID_Turma);
    $SQL -> bindValue(":id_disciplina", $ID_Disciplina);

    $SQL -> execute();

    return $SQL -> fetchAll();
}


?>
