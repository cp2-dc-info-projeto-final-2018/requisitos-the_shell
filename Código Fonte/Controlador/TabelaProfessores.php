<?php

require_once("TabelaUsuários.php");

function CadastraProfessor($ID_Usuario, $dadosNovoProfessor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('INSERT INTO professor(id_professor, siape, id_classe_usuario,id_disciplina) VALUES
                         (:id, :siape, 2,:id_disciplina);');

  $SQL -> bindValue(':id', $ID_Usuario);
  $SQL -> bindValue(':siape', $dadosNovoProfessor["Siape"]);
  $SQL -> bindValue('id_disciplina', $dadosNovoProfessor["Disciplina"]);

  $SQL -> execute();
}

function ListaProfessores()
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> query('SELECT
                        usuario.id_usuario AS ID_Usuario,
                        usuario.nome AS Nome,
                        usuario.tel AS Tel,
                        usuario.data_nasc AS Data_Nasc,
                        usuario.email AS Email,
                        professor.siape AS Siape,
                        disciplina.disciplina AS Disciplina
                       FROM professor
                       LEFT JOIN usuario ON professor.id_professor = usuario.id_usuario
                       LEFT JOIN disciplina ON professor.id_disciplina = disciplina.id_disciplina;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}

function ListaInfoProfessor($Login)
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
                                  professor.siape AS Siape
                                FROM usuario
                                WHERE login = :login
                                LEFT JOIN classe
                                ON usuario.id_classe_usuario = classe.id_classe
                                LEFT JOIN professor
                                ON professor.id_classe_usuario = classe.id_classe');

  $Info_Usuario -> bindValue(':login', $Login);

  $Info_Usuario -> execute();

   return $Info_Aluno = $Info_Usuario -> fetch();
}

function ListaDisciplinaDoProfessor($ID_Professor)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT
                          id_discipina AS ID_Disciplina
                         FROM professor
                         JOIN disciplina ON professor.id_disciplina = disciplina.id_disciplina
                         WHERE id_professor = :id_professor;');

  $SQL -> bindValue(":id_professor", $ID_Professor);

  $SQL -> execute();

  return $SQL -> fetch();
}

?>
