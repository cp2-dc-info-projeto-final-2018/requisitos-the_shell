<!DOCTYPE html>

<?php

$BD = CriaConexãoBD();

?>

<html>

<head>
  <meta charset="utf-8"/>
  <title>Página de Login</title>
</head>

<body>
  <form id="Cabeçalho">
    <div>
      <h1 class="Cabeçalho" id="CP2">Colégio Pedro II</h1>
      <h1 class="Cabeçalho" id="THE_SHELL">THE SHELL</h1>
    </div>
  </form>
  <br/>
  <br/>
  <form id="Login_Form">
    <div>
      Login: <br/>
      <input type="text" id="Login_TXT" name="Login"/><br/>
      Senha: <br/>
      <input type="password" id="Senha_TXT" name="Senha"/><br/>
      <input type="radio" id="Manter_Logado" name="Manter_Logado"/>Manter-me logado<br/>
      <br/>
      <br>
      <br>
      <br>
      <br>
      <a href="">Esqueci minha senha</a>
      <input type="submit" id="btn_Submit" name="Submit" value="Entrar"/>
    </div>
  </form>
</body>

<?php
$Request = $_REQUEST;


?>

</html>
