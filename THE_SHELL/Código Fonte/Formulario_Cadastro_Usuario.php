<?php

session_start();
$Erros = null;
if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

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

  <div id="erro">
    <p>
      <?php
      if ($Erros != null)
      {

        foreach ($Erros as $Erro)
        {
          echo $Erro;
        }

        unset($Erro);
      }

      ?>
    </p>
  </div>

  <form id="log-acesso" method="POST" action="Controlador/CadastroUsuario.php">
    <h3>Cadastro de Usuário</h3>
    Login: <input name="Login" required type="text" placeholder="Ex: xXxARTHUR_MITOxXx"/>
    <br>
    <br>
    Nome: <input id="nome" name="Nome" required type="text" minlength="2" maxlength="255" placeholder="Ex: João Silva"/>
    <br>
    <br>
    Senha: <input name="Senha" required type="password" minlength="4" maxlength="16" placeholder="Ex: ****************"/>
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
