 <?php

function CriaConexaoBD() : PDO
{
  $BD = new PDO('mysql:host=localhost;dbname=the_shell;charset=utf8', 'THE_SHELL', 'projetofinal');

  $BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $BD;
}

?>
