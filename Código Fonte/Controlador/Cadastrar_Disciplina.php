<?php

require_once('Conexão_BD.php');
require_once('TabelaDisciplina.php');

$Request = array_map('trim', $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Nome_Disciplina' => FILTER_DEFAULT
  ]
);

if ($Request['Nome_Disciplina'] == null)
{
  $Erros[] = "A Disciplina precisa ter um nome";
}

if (empty($Erros))
{
  CadastraDisciplina($Request['Nome_Disciplina']);
  header("Location: ../Gerenciamento_de_Disciplina.php");
}

?>
