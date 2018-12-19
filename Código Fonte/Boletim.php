<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");
require_once("Controlador/TabelaBoletim.php");

session_start();

$Usuario_Logado = $_SESSION['Usuário'];
$Classe_Usuario = $Usuario_Logado['id_classe'];
$ID_Turma = $Usuario_Logado['ID_Turma'];

#if ($Classe_Usuario == 1) {
  $ID_Aluno = $Usuario_Logado['id_usuario'];
#}
#else {
#  header("Acesso_Negado.php");
#}

$Disciplinas = ListaDisciplinasDaTurma($ID_Turma);

for ($i = 0; $i <= (count($Disciplinas) - 1); $i++) {
  $Boletim[$i] = ListaBoletimDoAluno($ID_Aluno, $Disciplinas[$i]["ID_Disciplina"]);
}

?>

<html>

<head>
  <title>Boletim</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Boletim.css" type="text/css">
</head>

<body>
  <?php if ($Classe_Usuario == 1) { ?>

    <div class="Barra_de_Navegacao">
      <a id="SHELL">SHELL</a>
      <a class="Celula" href="Homepage.php">Home</a>
      <a class="Celula" href="Aluno.php">Perfil</a>
      <a class="Celula" href="Boletim.php">Boletim</a>
    </div>

  <?php } else if ($Classe_Usuario == 2) { ?>
    <div class="Barra_de_Navegacao">
      <a id="SHELL">SHELL</a>
      <a class="Celula" href="Homepage.php">Home</a>
      <a class="Celula" href="Professor.php">Perfil</a>
      <a class="Celula" href="Gerenciamento_de_Turmas.php">Turmas</a>
      <a class="Celula" href="Seleção_de_Boletim.php">Notas</a>
    </div>

  <?php } else if ($Classe_Usuario == 3) { ?>
    <div class="Barra_de_Navegacao">
      <a id="SHELL">SHELL</a>
      <a class="Celula" href="Homepage.php">Home</a>
      <a class="Celula" href="Secretaria.php">Perfil</a>
      <a class="Celula" href="Cadastro_de_Usuario.php">Cadastrar Usuários</a>
      <a class="Celula" href="Gerenciamento_de_Disciplina.php">Disciplinas</a>
      <a class="Celula" href="Gerenciamento_de_Turmas.php">Turmas</a>
      <a class="Celula" href="Gerenciamento_de_Professores.php">Professores</a>
      <a class="Celula" href="Gerenciamento_de_Secretaria.php">Secretaria</a>
      <a class="Celula" href="Professor_Disciplina_Turma.php">Turmas e Professores</a>
      <a class="Celula" href="Seleção_de_Boletim.php">Notas</a>
    </div>

  <?php } ?>

  <br>
  <br>
  <br>

  <h3 id="Aluno"><?= $Usuario_Logado['Nome'] ?>
  <table id="Boletim">
		<tr>
      <th class="Nome_Coluna">Disciplina</th>
			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">Média</th>
		</tr>
    <?php
    for ($i = 0; $i <= (count($Disciplinas) - 1); $i++)
    {
      if (! empty($Boletim[$i]))
      { ?>

        <tr class="Linhas">
          <th class="Celulas"><a> <?= $Boletim[$i]["Disciplina"] ?></a></th>
  			  <th class="Celulas"> <?= $Boletim[$i]["Pri_Cert"] ?></th>
  			  <th class="Celulas"> <?= $Boletim[$i]["Seg_Cert"] ?></th>
          <th class="Celulas"> <?= $Boletim[$i]["Ter_Cert"] ?></th>
  			  <th class="Celulas"> <?= $Boletim[$i]["Media"] ?></th>
  		  </tr>

    <?php
      }
      else
      { ?>
        <tr class="Linhas">
          <th class="Celulas"><a><?= $Disciplinas[$i]["Disciplina"] ?></a></th>
  			  <th class="Celulas">0.0</th>
  			  <th class="Celulas">0.0</th>
          <th class="Celulas">0.0</th>
  			  <th class="Celulas">0.0</th>
  		  </tr>
        <?php
      }
    } ?>
	</table>

  <div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>
</body>

</html>
