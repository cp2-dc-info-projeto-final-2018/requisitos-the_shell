<?php

require_once("Conexão_BD.php");
require_once("TabelaUsuários.php");
session_start();

function AbrePerfil($Usuario_Logado)

{
  if ($Usuario_Logado['id_classe'] == 1)
  {
    header("Location: ../Aluno.php");
  }
  else if ($Usuario_Logado['id_classe'] == 2)
  {
    header("Location: ../Professor.php");
  }
  else if ($Usuario_Logado['id_classe'] == 3) {
    header("Location: ../Secretaria.php");
  }
}



$Usuario = ListaUsuarioPorLogin($_SESSION['Usuário']);

AbrePerfil()


?>
