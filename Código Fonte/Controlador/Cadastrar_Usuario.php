<?php

require_once('TabelaUsuários.php');
require_once('Conexão_BD.php');

function ValidaString($Valor, $Nome_Campo, $Tam_Min, $Tam_Max)
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
    'Data_Nasc' => FILTER_DEFAULT,
    'Tel' => FILTER_DEFAULT,
    'Email' => FILTER_VALIDATE_EMAIL,
    'Senha' => FILTER_DEFAULT,
    'Classe' => FILTER_DEFAULT
  ]
);

#ID das classes:
#1 - Aluno
#2 - Professor
#3 - Diretor
#4 - Secretário
#5 - SESOP e NAPNE

if (empty($Request['Classe']))
{
  $Erros[] = "Classe não especificada";
}

ValidaString($Request['Login'], "Login", 2, 32);
ValidaString($Request['Nome'], "Nome", 2, 50);
ValidaString($Request['Tel'], "Tel", 8, 12);
ValidaString($Request['Data_Nasc'], "Data_Nasc", 10, 10);
ValidaString($Request['Email'], "Email", 4, 30);
ValidaString($Request['Senha'], "Senha", 2, 16);

if ($Request['Senha'] != $Request['Confirmar_Senha'])
{
  $Erros[] = "As senhas não combinam";
  header("Location: ../Cadastro.php");
}

if (empty($Erros) == true)
{
  CadastraUsuario($Request);
} else {
  session_start();
  $_SESSION['erros'] = $Erros;
  header("Location: ../Cadastro.php");
}
