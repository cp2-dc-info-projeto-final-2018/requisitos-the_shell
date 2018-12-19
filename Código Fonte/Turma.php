<!DOCTYPE html>

<?php

require_once("Controlador/TabelaTurmas.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];

$ID_Turma = $_GET['id_turma'];

$Turma = ListaTurmaPorID($ID_Turma);

$Alunos = ListaAlunosDaTurma($ID_Turma);

?>

<html>

<script>

function VerAluno(id_aluno)
{
  location.href = `Aluno.php?id_aluno=${id_aluno}`;
}

</script>

<head>
  <meta charset="utf-8">
  <title><?= $Turma['nome'] ?></title>
  <link rel="stylesheet" type="text/css" href="Turma.css">
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

  <h3 id="Turma"><?= $Turma['nome'] ?></h3>

  <table id="Alunos">
    <tr>
      <th class="Nome_Coluna">Nome</th>
      <th class="Nome_Coluna">Email</th>
      <th class="Nome_Coluna">Telefone</th>
      <th class="Nome_Coluna">Matrícula</th>
    </tr>
    <?php
    for ($i = 0; $i <= (count($Alunos) - 1); $i++) { ?>
      <tr>
        <td class="Celulas" onclick="VerAluno(<?= $Alunos[$i]["ID_Aluno"] ?>)"><?= $Alunos[$i]["Nome"]?></td>
        <td class="Celulas"><?= $Alunos[$i]["Email"]?></td>
        <td class="Celulas"><?= $Alunos[$i]["Tel"]?></td>
        <td class="Celulas"><?= $Alunos[$i]["Matricula"]?></td>
      </tr>
    <?php } ?>
  </table>

  <br>
  <br>
  <br>
  <br>

  <div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
