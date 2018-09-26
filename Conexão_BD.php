<!DOCTYPE html>

<?php

function CriaConexãoBD() : PDO
{
  $BD = new PDO('mysql:host=localhost;dbname=the_shell;charset=utf8', 'The_Shell', 'projetofinal');

  $BD -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $BD;
}

?>
