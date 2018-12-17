<?php

require_once("TabelaTurmas.php");

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
                          boletim.primeira_cert AS "Pri_Cert",
                          boletim.segunda_cert AS "Seg_Cert",
                          boletim.terceira_cert AS "Ter_Cert",
                          boletim.media AS Media
                         FROM boletim
                         LEFT JOIN aluno ON aluno.id_aluno = boletim.id_aluno
                         RIGHT JOIN usuario ON usuario.id_usuario = aluno.id_aluno
                         LEFT JOIN disciplina ON boletim.id_disciplina = disciplina.id_disciplina
                         WHERE aluno.id_aluno = :aluno
                         AND boletim.id_disciplina = :disciplina;');

  $SQL -> bindValue(":aluno", $id_Aluno);
  $SQL -> bindValue(":disciplina", $id_Disciplina);

  $SQL -> execute();

  return $SQL -> fetch();
}

function CadastraNotas($ID_Aluno, $ID_Disciplina, $Notas)
{
  $BD = CriaConexaoBD();

  $Disciplina = ListaDisciplinaPorID($ID_Disciplina);

  $Pri_Cert = (float)$Notas["Pri_Cert"];
  $Seg_Cert = (float)$Notas["Seg_Cert"];
  $Ter_Cert = (float)$Notas["Ter_Cert"];

  $Media = ($Pri_Cert * 3 + $Seg_Cert * 3 + $Ter_Cert * 4) / 10;

  $SQL = $BD -> prepare('UPDATE boletim
                         SET primeira_cert = :pri_cert,
                             segunda_cert = :seg_cert,
                             terceira_cert = :ter_cert,
                             media = :media
                         WHERE id_aluno = :id_aluno
                         AND id_disciplina = :id_disciplina');

  $SQL -> bindValue(":id_aluno", $ID_Aluno);
  $SQL -> bindValue(":id_disciplina", $ID_Disciplina);
  $SQL -> bindValue(":pri_cert", $Pri_Cert);
  $SQL -> bindValue(":seg_cert", $Seg_Cert);
  $SQL -> bindValue(":ter_cert", $Ter_Cert);
  $SQL -> bindValue(":media", $Media);

  $SQL -> execute();
}

function GeraBoletimDaTurma($ID_Turma, $ID_Disciplina)
{
  $BD = CriaConexaoBD();

  $Alunos_da_Turma = ListaAlunosDaTurma($ID_Turma);

  for ($i = 0; $i <= (count($Alunos_da_Turma) - 1) ; $i++) {
    $ID_Aluno = $Alunos_da_Turma[$i]["ID_Usuario"];

    $SQL = $BD -> prepare('INSERT INTO boletim(id_aluno, id_disciplina) VALUES
                           (:id_aluno, :id_disciplina);');

    $SQL -> bindValue(":id_aluno", $ID_Aluno);
    $SQL -> bindValue(":id_disciplina", $ID_Disciplina);

    $SQL -> execute();
  }
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
                          usuario.nome AS Nome_Aluno,
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
