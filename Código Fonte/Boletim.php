<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");
require_once("Controlador/TabelaBoletim.php");

session_start();

$Usuario_Logado = $_SESSION['Usuário'];
$Classe_Usuario = $Usuario_Logado['id_classe_usuario'];
$ID_Turma = $Usuario_Logado['id_turma'];

if ($Classe_Usuario == 1) {
  $ID_Aluno = $Usuario_Logado['id_aluno'];
}
else {
  header("Acesso_Negado.php");
}

$Disciplinas = ListaDisciplinasDaTurma($ID_Turma);

?>

<html>

<head>
  <title>Boletim</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Boletim.css" type="text/css">
</head>

<body>
  <table id="Boletim">
		<tr>
      <th class="Nome_Coluna">Disciplina</th>
			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">Média</th>
		</tr>
    <?php for ($i = 0; $i <= (count($Disciplinas) - 1); $i++) { ?>

      <tr class="Linhas">
        <th class="Celulas"><a> <?= $Boletim[$i]["Disciplina"] ?></a></th>
			  <th class="Celulas"> <?= $Boletim[$i]["Pri_Cert"] ?></th>
			  <th class="Celulas"> <?= $Boletim[$i]["Seg_Cert"] ?></th>
        <th class="Celulas"> <?= $Boletim[$i]["Ter_Cert"] ?></th>
			  <th class="Celulas"> <?= $Boletim[$i]["Media"] ?></th>
		  </tr>

    <?php } ?>


	</table>
</body>

</html>
