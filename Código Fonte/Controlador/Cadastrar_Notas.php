<?php

require_once('Conexão_BD.php');
require_once('TabelaDisciplina.php');
require_once('TabelaAlunos.php');
require_once('TabelaBoletim.php');
require_once('TabelaUsuários.php');

session_start();

$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

$Request = array_map("trim", $_REQUEST);

for ($i = 0; $i <= (count($Disciplinas) - 1); $i++)
{
  $id_Disciplina = $Disciplinas[$i]["id_disciplina"];

  $Request = filter_var_array(
    $Request,
    [
      'Pri_Cert' => FILTER_VALIDATE_FLOAT,
      'Seg_Cert' => FILTER_VALIDATE_FLOAT,
      'Ter_Cert' => FILTER_VALIDATE_FLOAT
    ]
  );

  CadastraBoletim($Usuario_Logado["id_usuario"], $id_Disciplina, $Request);
}

header("Location: ../Gerenciamento_de_Notas.php");

?>
