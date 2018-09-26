<!DOCTYPE html>

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

$Erros = [];

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

CadastraUsuario($Request);

?>

<html>

<head>
  <meta charset="utf-8"/>
  <title>Cadastro de usuário</title>
  <link rel="stylesheet" type="text/css" href="Login.css"/>
</head>

<body>

  <div class="cabecalho">
    <h2>Colégio Pedro II</h2>
    <h2 id="nome">SHELL - Notas</h2>
  </div>

  <form id="log-acesso" method="POST">
    <h3>Cadastro de Usuário</h3>
    Login: <input name="Login" required type="text" placeholder="Ex: xXxARTHUR_MITOxXx"/>
    <br>
    <br>
    Nome: <input id="nome" name="Nome" required type="text" minlength="2" maxlength="255" placeholder="Ex: João Silva"/>
    <br>
    <br>
    Senha: <input name="Senha" required type="password" minlength="4" maxlength="16" placeholder="Ex: Diga_Não_A_PAF"/>
    <br>
    <br>
    E-mail: <input name="Email" required type="email" placeholder="Ex: alunodopedroii@pedroii.com"/>
    <br>
    <br>
    Telefone: <input name="Tel" required type="text" placeholder="(99) 91234-6789"/>
    <br>
    <br>
    <input name="btnSubmit" type="submit" value="Cadastrar"/>
  </form>

</body>

</html>
