<?php

require_once("Conexão_BD.php");
require_once("TabelaUsuários.php"); 

function CadastraSecretaria($ID_Usuario, $dadosNovoSecretaria)
{
	$BD = CriaConexaoBD();

	$SQL = $BD -> prepare('INSERT INTO secretaria(id_usuario, siape, id_classe_usuario) VALUES
						   (:id_usuario, :siape, 3);');

	$SQL -> bindValue(":id_usuario", $ID_Usuario);
	$SQL -> bindValue(":siape", $dadosNovoSecretaria['Siape']);

	$SQL -> execute();
}

function ListaSecretarios()
{
  $BD = CriaConexaoBD();

  $SQL = $BD -> query('SELECT
                        usuario.id_usuario AS ID_Usuario,
                        secretaria.id_secretaria AS ID_Secretaria,
                        usuario.nome AS Nome,
                        usuario.tel AS Tel,
                        usuario.data_nasc AS Data_Nasc,
                        usuario.email AS Email,
                        secretaria.siape AS Siape,
                       FROM secretaria
                       LEFT JOIN usuario ON secretaria.id_usuario = usuario.id_usuario;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}

function ListaInfoSecretaria($ID_Usuario)
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
                                  secretaria.siape AS Siape
                                FROM usuario
                                WHERE login = :login
                                LEFT JOIN classe
                                ON usuario.id_classe_usuario = classe.id_classe
                                LEFT JOIN secretaria
                                ON secretaria.id_classe_usuario = classe.id_classe');

  $Info_Usuario -> bindValue(":id_secretaria", $ID_Secretaria);

  $Info_Usuario -> execute();

   return $Info_Aluno = $Info_Usuario -> fetch();
}


?>