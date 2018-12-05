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
                        professor.id_professor AS ID_Professor,
                        usuario.nome AS Nome,
                        usuario.tel AS Tel,
                        usuario.data_nasc AS Data_Nasc,
                        usuario.email AS Email,
                        secretaria.siape AS Siape,
                       FROM professor
                       LEFT JOIN usuario ON secretaria.id_usuario = usuario.id_usuario;');

  $SQL -> execute();

  return $SQL -> fetchAll();
}



?>