<?php

require_once('Conexão_BD.php');
require_once('TabelaDisciplina.php');
require_once('TabelaAlunos.php');

$Request = array_map("trim", $_REQUEST);

$Request = filter_var_array(
  $Request,
  [

  ]
);


?>
