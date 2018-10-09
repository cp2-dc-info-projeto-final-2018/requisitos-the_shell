<?php

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


?>
