<?php

require_once('TabelaUsuários.php');
require_once('Conexão_BD.php');
require_once('TabelaTurmas.php');
require_once('Cadastrar_Usuario.php');

$Request = array_map('trim', $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Nome_Turma' => FILTER_DEFAULT,
    'Serie_Turma' => FILTER_DEFAULT
  ]
);

ValidaString($Request['Nome_Turma'], "Nome_Turma", 3, 10);
ValidaString($Request['Serie_Turma'], "Serie_Turma", 1, 18);

if (empty($Erros) == true)
{
  session_start();
  header("Location: ../Cadastro_de_Usuario.php");
} else {
  session_start();
  $_SESSION['erros'] = $Erros;
}


?>
