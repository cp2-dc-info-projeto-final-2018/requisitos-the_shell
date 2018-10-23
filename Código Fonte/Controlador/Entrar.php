<?php

require_once('TabelaUsuários.php');

session_start();

>>>>>>> 15c39f183265720dce6be20237de0703ed87e717
$Erro = null;

$Request = array_map('trim', $_REQUEST);
$Request = filter_var_array(
               $Request,
               [ 'Login' => FILTER_DEFAULT,
                 'Senha' => FILTER_DEFAULT ]
           );

$Login = $Request['Login'];
$Senha = $Request['Senha'];

if ($Login == false)
{
  $Erro = "Login não informado.";
}
else if ($Senha == false)
{
  $Erro = "Senha não informada.";
} else {
  $Login_Correto = ListaUsuarioPorLogin($Login);

  if ($Login_Correto == false)
  {
    $Erro = "Nenhum usuário encontrado para este Login.";
  }
  else if (! password_verify($Senha, $Login_Correto['senha']))
  {
    $Erro = "Senha inválida.";
  }
}

if (empty($Erro))
{
  $_SESSION['Usuário'] = $Login;
  header("Location: ../Verificação_de_Classe.html");
}
else
{
  $_SESSION['Erro'] = $Erro;
  header("Location: ../Login.php");
}


>>>>>>> 15c39f183265720dce6be20237de0703ed87e717
?>
