<?php
require_once('Controlador/Conexão_BD.php');
require_once('Professor_Disciplina_Turma.php');


$Request = array_map('trim', $_REQUEST);
$Request = filter_var_array(
  $Request,
  [
    'Disciplina' => FILTER_VALIDATE_INT,
    'Turma' => FILTER_VALIDATE_INT
  ]
);
if (empty($Erros) == true)
{
  session_start();
  CadastraTurmaDisciplina($Request);
}

else {
    session_start();
    $_SESSION['erros'] = $Erros;
  }

function CadastraTurmaDisciplina ($dados)
{
$BD = CriaConexaoBD();

$SQL = $BD -> prepare('INSERT INTO professor_disciplinas_turma (id_turma, id_disciplina) VALUES
                       ( :id_turma, :id_disciplina);');

$SQL -> bindValue(':id_turma', $dados['Turma']);
$SQL -> bindValue(':id_disciplina', $dados['Disciplina']);
$SQL -> execute();
}
?>
