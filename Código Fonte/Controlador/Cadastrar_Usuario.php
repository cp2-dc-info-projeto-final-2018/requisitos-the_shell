
<?php

require_once('TabelaUsuários.php');
require_once('Conexão_BD.php');
require_once('TabelaAlunos.php');
require_once('TabelaProfessores.php');
require_once('TabelaSecretaria.php');

function ValidaString($Valor, $Nome_Campo, $Tam_Min, $Tam_Max)
{
  global $Erros;

  if ($Valor == false)
  {
    $Erros[] = "Valor de $Nome_Campo inválido. ";
  }
  else if ((strlen($Valor) < $Tam_Min) || (strlen($Valor) > $Tam_Max))
  {
    $Erros[] = "$Nome_Campo deve ter, no mínimo, $Tam_Min caracteres e, no máximo, $Tam_Max caracteres. ";
  }
}

$Request = array_map('trim', $_REQUEST);

if ($_REQUEST['Classe'] == 1) {
  $Request = filter_var_array(
    $Request,
    [
      'Login' => FILTER_DEFAULT,
      'Nome' => FILTER_DEFAULT,
      'Data_Nasc' => FILTER_DEFAULT,
      'Tel' => FILTER_DEFAULT,
      'Email' => FILTER_VALIDATE_EMAIL,
      'Senha' => FILTER_DEFAULT,
      'Classe' => FILTER_DEFAULT,
      'Confirmar_Senha' => FILTER_DEFAULT,
      'Matricula' => FILTER_DEFAULT,
      'Turma' => FILTER_VALIDATE_INT
    ]
  );
}
else if ($_REQUEST['Classe'] == 2) {
  $Request = filter_var_array(
    $Request,
    [
      'Login' => FILTER_DEFAULT,
      'Nome' => FILTER_DEFAULT,
      'Data_Nasc' => FILTER_DEFAULT,
      'Tel' => FILTER_DEFAULT,
      'Email' => FILTER_VALIDATE_EMAIL,
      'Senha' => FILTER_DEFAULT,
      'Classe' => FILTER_DEFAULT,
      'Confirmar_Senha' => FILTER_DEFAULT,
      'Siape_Professor' => FILTER_DEFAULT
    ]
  );
}
else if ($_REQUEST['Classe'] == 3) {
  $Request = filter_var_array(
    $Request,
    [
      'Login' => FILTER_DEFAULT,
      'Nome' => FILTER_DEFAULT,
      'Data_Nasc' => FILTER_DEFAULT,
      'Tel' => FILTER_DEFAULT,
      'Email' => FILTER_VALIDATE_EMAIL,
      'Senha' => FILTER_DEFAULT,
      'Classe' => FILTER_DEFAULT,
      'Confirmar_Senha' => FILTER_DEFAULT,
      'Siape_Secretaria' => FILTER_DEFAULT
    ]
  );
}


#ID das classes:
#1 - Aluno
#2 - Professor
#3 - Secretário

if (empty($Request['Classe']) || $Request['Classe'] == "")
{
  $Erros[] = "Classe não especificada. ";
}

ValidaString($Request['Login'], "Login", 2, 32);
ValidaString($Request['Nome'], "Nome", 2, 50);
ValidaString($Request['Tel'], "Tel", 8, 12);
ValidaString($Request['Email'], "Email", 4, 30);
ValidaString($Request['Senha'], "Senha", 2, 80);

if ($Request['Classe'] == 1)
{
  ValidaString($Request['Matricula'], "Matricula", 9, 80);
}

else if ($Request['Classe'] == 2)
{
  ValidaString($Request['Siape_Professor'], "Siape", 7, 80);
}

else if ($Request['Classe'] == 3)
{
  ValidaString($Request['Siape_Secretaria'], "Siape", 7, 80);
}




if ($Request['Senha'] != $Request['Confirmar_Senha'])
{
  $Erros[] = "As senhas não combinam. ";

}

$ID_Usuario = CadastraUsuario($Request);

if (empty($Erros) == true)
{
  session_start();

  if ($Request['Classe'] == 1)
  {
    CadastraAluno($ID_Usuario, $Request);

    $_SESSION["Turma_Escolhida"] = $Request['Turma'];
  }
  else if ($Request['Classe'] == 2)
  {
    CadastraProfessor($ID_Usuario, $Request);
  }
  else if ($Request['Classe'] == 3)
  {
    CadastraSecretaria($ID_Usuario, $Request);
  }
}
else {
  session_start();

  $_SESSION['erros'] = $Erros;
}

header("Location: ../Cadastro_de_Usuario.php");
