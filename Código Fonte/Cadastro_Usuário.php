

<!DOCTYPE html>

<?php

require_once('Funções.php');

$Request = array_map('trim', $_REQUEST);


$Request = filter_var_array(
  $Request,
  [
    'Login' => [ 'filter' => FILTER_VALIDATE_REGEXP,
                'options' => [ 'regexp' => '/^[\p{L}\p{Mn}\p{Pd}\'\s]{3,255}$/u' ] ],
    'Nome' => [ 'filter' => FILTER_VALIDATE_REGEXP,
                'options' => [ 'regexp' => '/^[\p{L}\p{Mn}\p{Pd}\'\s]{3,255}$/u' ] ],
    'Tel' => [ 'filter' => FILTER_VALIDATE_REGEXP,
               'options' => [ 'regexp' => '/^(\d{3}-?\d{3}-?\d{3}$|^\d{4}-?\d{4})$/' ] ],
    'Email' => FILTER_VALIDATE_EMAIL,
    'Senha' => [ 'filter' => FILTER_VALIDATE_REGEXP,
                 'options' => [ 'regexp' => '/^[\p{L}\p{Mn}\p{Pd}\'\s]{3,255}$/u' ] ],
  ]
);

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
