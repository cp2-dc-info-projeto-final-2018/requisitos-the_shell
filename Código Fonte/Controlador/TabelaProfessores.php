<?php

require_once("TabelaUsuários.php");

function CadastraProfessor($dadosNovoProfessor)
{
  $BD = CriaConexaoBD();

  $ID = CadastraUsuario($dadosNovoProfessor);

  $SQL = $BD -> prepare('INSERT INTO professor(id_usuario, siape, id_classe) VALUES
                         (:id, :matricula, 2);');

  $SQL -> bindValue(':id', $ID);
  $SQL -> bindValue(':siape', $dadosNovoProfessor["Siape"]);

  $SQL -> execute();
}

function ListaProfessores()
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> query('SELECT
                        usuario.id_usuario AS ID_Usuario,
                        professor.id_professor AS ID_Professor,
                        usuario.nome AS Nome,
                        usuario.tel AS Tel,
                        usuario.data_nasc AS Data_Nasc,
                        usuario.email AS Email,
                        professor.siape AS Siape,
                        disciplina.disciplina AS Disciplina
                       FROM professor
                       LEFT JOIN usuario ON professor.id_usuario = usuario.id_usuario
                       LEFT JOIN disciplina ON professor.id_disciplina = disciplina.id_disciplina;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}

?>
