<?php

require_once('Funções.php');

function ValidaTamanhoString($Valor, $Nome_Campo, $Tam_Min, $Tam_Max)
{
  global $Erros;

  if ($Valor == false)
  {
    $Erros[] = "Valor de $Nome_Campo inválido";
  }
  else if ((strlen($Valor) < $Tam_Min) || (strlen($Valor) > $Tam_Max))
  {
    $Erros[] = "$Nome_Campo deve ter, no mínimo, $Tam_Min caracteres e, no máximo, $Tam_Max caracteres.";
  }
}

$Request = array_map('trim', $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Login' => FILTER_DEFAULT,
    'Nome' => FILTER_DEFAULT,
    'Tel' => FILTER_DEFAULT,
    'Email' => FILTER_VALIDATE_EMAIL,
    'Senha' => FILTER_DEFAULT
  ]
);

ValidaTamanhoString($Request['Login'], "Login", 2, 32);
ValidaTamanhoString($Request['Nome'], "Nome", 2, 50);
ValidaTamanhoString($Request['Tel'], "Tel", 8, 12);
ValidaTamanhoString($Request['Email'], "Email", 4, 30);
ValidaTamanhoString($Request['Senha'], "Senha", 2, 16);

if (empty($Erros) == true)
{
  CadastraUsuario($Request);
} else {
  session_start();
  $_SESSION['erros'] = $Erros;
  header("Location: ../Formulario_Cadastro_Usuario.php");
}
