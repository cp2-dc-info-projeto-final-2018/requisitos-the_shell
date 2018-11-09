<?php

require_once('Conexão_BD.php');

function ListaUsuarios()
{
  $BD = CriaConexaoBD();

  if ($BD == null)
  {
    return null;
  }

  $Resultado = $BD -> query('SELECT * FROM usuario ORDER BY nome ASC');

  return $Resultado -> fetchAll();
}

function CadastraUsuario($Info_Login)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('INSERT INTO usuario(login, nome, senha, email, tel, id_classe_usuario)
                         VALUES (:login, :nome, :senha, :email, :tel, :classe);');

  $SQL -> bindValue(':nome', $Info_Login['Nome']);
  $SQL -> bindValue(':login', $Info_Login['Login']);
  $SQL -> bindValue(':senha', password_hash($Info_Login['Senha'], PASSWORD_DEFAULT));
  $SQL -> bindValue(':email', $Info_Login['Email']);
  $SQL -> bindValue(':tel', $Info_Login['Tel']);
  $SQL -> bindValue(':classe', $Info_Login['Classe']);

  $SQL -> execute();

  $ID_Usuario = $BD -> lastInsertId();

  if ($Info_Login['Classe'] = "1")
  {
    $Info_Aluno = $BD -> prepare('INSERT INTO aluno(id_usuario, matricula, id_turma, id_classe) VALUES
                                  (:ID_Usuario, :Matricula, :ID_Turma, 1);');

    $Info_Aluno -> bindValue(":ID_Usuario", $ID_Usuario);
    $Info_Aluno -> bindValue(":Matricula", $Info_Login['Matricula']);
    $Info_Aluno -> bindValue(":ID_Turma", $Info_Login['Turma']);

    $Info_Aluno -> execute();
  }
}

function ListaUsuarioPorLogin($Login_Usuario)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> prepare('SELECT *
                         FROM usuario
                         WHERE login = :login');

  $SQL -> bindValue(':login', $Login_Usuario);

  $SQL -> execute();

  return $SQL -> fetch();
}

function ListaClasseUsuario($Login_Usuario)
{
  $BD = CriaConexaoBD();

  $Usuario = $BD -> query('SELECT
                            usuario.id_classe_usuario AS "id_classe",
                            classe.classe AS "classe"
                           FROM $usuario
                           WHERE login = :login
                           LEFT JOIN classe
                           ON usuario.id_classe_usuario = classe.id_classe;');

  $Usuario -> bindValue(':login', $Login_Usuario);

  $Usuario -> execute();

  return $Info_Usuario = $Usuario -> fetch();
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

function ListaInfoSecretario($Login)
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

function ListaInfoSesop($Login)
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

function ValidaSenha($Senha_Usuario)
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> query('SELECT ');
}


?>
