<?php

require_once('Conexão_BD.php');
require_once('TabelaTurmas.php');

if ($_REQUEST['Integrado'] == null)
{
  $_REQUEST['Integrado'] = false;
}
else if ($_REQUEST['Integrado'] == "1") {
  $_REQUEST['Integrado'] = true;
}

$Request = array_map('trim', $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Nome_Turma' => FILTER_DEFAULT,
    'Serie_Turma' => FILTER_DEFAULT,
    'Integrado' => FILTER_DEFAULT
  ]
);

if (empty($Erros) == true)
{
  CadastraTurma($Request);
  header("Location: ../Gerenciamento_de_Turmas.php");
} else {
  if ($Request['Nome_Turma'] == null) {
    $_SESSION['erros'] = "Nome de turma não especificado";
  }
  else if ($Request['Serie_Turma'] == null)
  {
    $_SESSION['erros'] = "Série da turma não especificada";
  }

  $_SESSION['erros'] = $Erros;
  header("Location: ../Gerenciamento_de_Turmas.php");
}


?>
