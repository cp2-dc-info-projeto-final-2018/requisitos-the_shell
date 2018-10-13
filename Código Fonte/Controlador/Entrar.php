<?php

<<<<<<< HEAD
require_once('Funções.php');

=======
>>>>>>> e2d3de5b268a3e2d6a35217dc479bf02e96865c3
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
<<<<<<< HEAD
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
  else if (! password_verify($Login, $Login_Correto['senha']))
  {
    $Erro = "Senha inválida.";
  } else {
    session_start();
    header('Location: Verificação_de_Classe.html');
  }
}
=======
  $Erro = "Login não informado";
}
else if (array_key_exists($Login, ListaUsuarioPorLogin($Login)) == false)
{
  $Erro = "Nenhum usuário encontrado para este Login";
}
else if ($Senha == false)
{
  $Erro = "Senha não informada";
}
else if (password_verify($Senha)) 
{

}
// PENDENTE: Validar senha do usuário
// PENDENTE: Redirecionar o usuário para a página de pedidos
else
{
  $Erro = "Senha inválida";
}

>>>>>>> e2d3de5b268a3e2d6a35217dc479bf02e96865c3

?>
