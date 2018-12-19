<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessores.php");

$Professores = ListaProfessores();

session_start();

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];

?>

<html>

<script>

VerProfessor(id_professor)
{
  location.href = `Professor.php?id_professor=${id_professor}`;
}


</script>

<head>
  <title>Professores</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Gerenciamento_de_Professores.css" type="text/css">
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

  <fieldset id="Campo_Professores">
    <table id="Professores">
      <tr>
        <th class="Nome_Coluna">Nome</th>
      </tr>
      <?php for ($i = 0; $i <= (count($Professores) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th class="Celulas" onclick="VerProfessor(<?= $Professores[$i]["ID_Professor"] ?>)"><?= $Professores[$i]["Nome"] ?></th>
        </tr>
      <?php } ?>
    </table>
  </fieldset>

</body>


</html>
