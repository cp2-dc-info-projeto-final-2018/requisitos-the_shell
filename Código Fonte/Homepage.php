<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaProfessores.php");
require_once("Controlador/TabelaSecretaria.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];

$Classe_Usuario = $UsuarioLogado['id_classe'];
$Login_Usuario = $UsuarioLogado['Login'];
$Nome_Usuario = $UsuarioLogado['Nome'];
$Email_Usuario = $UsuarioLogado['Email'];
$Tel_Usuario = $UsuarioLogado['Tel'];
$Data_Nasc_Usuario = $UsuarioLogado['Data_Nasc'];

if ($Classe_Usuario == 1)
{
  $Matricula_Usuario = $UsuarioLogado['Matricula'];
  $Turma_Usuario = $UsuarioLogado['Turma'];
}
else if ($Classe_Usuario == 2)
{
  $Siape_Usuario = $UsuarioLogado['Siape'];
}
else if ($Classe_Usuario == 3)
{
  $Siape_Usuario = $UsuarioLogado['Siape'];
}

?>

<html>

<head>
  <meta charset="utf-8">
  <title>SHELL</title>
  <link rel="stylesheet" type="text/css" href="Homepage.css">
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

  <h1 id="Bem_Vindo">Bem vindo ao SHELL, <?= $Nome_Usuario ?>. </h1>

  <br>
  <br>

  <div id="Informaçoes_de_Usuario">
    <h3 id="Info_h3">Informações de Usuário</h3>
    <label><b>Login:</b> <?= $Login_Usuario ?></label>
    <br>
    <br>
    <br>
    <label><b>Nome:</b> <?= $Nome_Usuario ?></label>
    <br>
    <br>
    <br>
    <label><b>Email:</b> <?= $Email_Usuario ?></label>
    <br>
    <br>
    <br>
    <label><b>Telefone:</b> <?= $Tel_Usuario ?></label>
    <br>
    <br>
    <br>
    <label><b>Data de Nascimento:</b> <?= $Data_Nasc_Usuario ?></label>
  </div>



  <div id="Informaçoes_de_Classe">
    <h3 id="Info_h3">
      Informações de
      <?php

      if ($Classe_Usuario == 1)
      {
        echo "Aluno";
      }
      else if ($Classe_Usuario == 2)
      {
        echo "Professor";
      }
      else if ($Classe_Usuario == 3) {
        echo "Secretaria";
      }

      ?>
    </h3>
    <?php if ($Classe_Usuario == 1) { ?>
      <label><b>Matrícula:</b> <?= $Matricula_Usuario ?></label>
      <br>
      <br>
      <label><b>Turma:</b> <?= $Turma_Usuario ?></label>
    <?php } ?>

    <?php if ($Classe_Usuario == 2) { ?>
      <label><b>Siape:</b> <?= $Siape_Usuario ?></label>
    <?php } ?>

    <?php if ($Classe_Usuario == 3) { ?>
      <label><b>Siape:</b> <?= $Siape_Usuario ?></label>
    <?php } ?>
  </div>

  <br>
  <br>

</body>


</html>
