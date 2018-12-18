<?php

require_once("TabelaUsuários.php");

function CadastraProfessor($ID_Usuario, $dadosNovoProfessor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('INSERT INTO professor(id_professor, siape, id_classe_usuario) VALUES
                         (:id, :siape, 2);');

  $SQL -> bindValue(':id', $ID_Usuario);
  $SQL -> bindValue(':siape', $dadosNovoProfessor["Siape_Professor"]);

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
                        professor.siape AS Siape
                       FROM professor
                       LEFT JOIN usuario ON professor.id_professor = usuario.id_usuario
                       ORDER BY usuario.nome ASC;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}

?>
