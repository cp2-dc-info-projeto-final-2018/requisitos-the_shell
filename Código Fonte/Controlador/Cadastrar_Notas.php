<?php

require_once('Conexão_BD.php');
require_once('TabelaDisciplina.php');
require_once('TabelaAlunos.php');
require_once('TabelaBoletim.php');
require_once('TabelaUsuários.php');

session_start();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

$ID_Disciplina = $_GET["id_disciplina"];
$ID_Aluno = $_GET["id_aluno"];

$Request = array_map("trim", $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Pri_Cert' => FILTER_VALIDATE_FLOAT,
    'Seg_Cert' => FILTER_VALIDATE_FLOAT,
    'Ter_Cert' => FILTER_VALIDATE_FLOAT
  ]
);

CadastraNotas($ID_Aluno, $ID_Disciplina, $Request);

header("Location: ../Gerenciamento_de_Notas.php");

?>
