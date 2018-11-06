<?php

require_once('TabelaUsuários.php');
require_once('TabelaAlunos.php');
require_once('Cadastrar_Usuario.php');

$Request = array_map('trim', $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Matricula' => FILTER_DEFAULT
  ]
);

ValidaString($Request['Matricula'], "Matricula", 2, 32);

if (empty($Erros) == true)
{
  session_start();
  header("Location: ../Secretaria.php");
} else {
  session_start();
  $_SESSION['erros'] = $Erros;
}

?>
