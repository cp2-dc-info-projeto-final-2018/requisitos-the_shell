<?php

require_once('Conexão_BD.php');
require_once('TabelaDisciplina.php');
require_once('TabelaAlunos.php');
require_once('TabelaBoletim.php');
require_once('TabelaUsuários.php');

session_start();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]["Login"]);

$ID_Disciplina = $_GET["id_disciplina"];
$ID_Aluno = $_GET["id_aluno"];
$ID_Turma = $_GET["id_turma"];

$Request = array_map("trim", $_REQUEST);

$Request = filter_var_array(
  $Request,
  [
    'Pri_Cert' => FILTER_DEFAULT,
    'Seg_Cert' => FILTER_DEFAULT,
    'Ter_Cert' => FILTER_DEFAULT
  ]
);

CadastraNotas($ID_Aluno, $ID_Disciplina, $Request);

header("Location: ../Boletim_da_Matéria.php?id_disciplina=$ID_Disciplina&id_turma=$ID_Turma");

?>
