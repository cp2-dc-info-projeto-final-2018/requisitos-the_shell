<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaProfessores.php");
require_once("Controlador/TabelaSecretaria.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];

$Classe_Usuario = $UsuarioLogado['id_classe'];

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
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Aluno.php"> Perfil</a>
    <a class="Celula" href="Boletim.php"> Boletim</a>
  </div>

<?php } else if ($Classe_Usuario == 2) { ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Professor.php"> Perfil </a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php"> Turmas</a>
    <a class="Celula" href="Seleção_de_Boletim.php" > Editar notas </a>
  </div>

<?php } else if ($Classe_Usuario == 3) { ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home"> Home </a>
    <a class="Celula" href="Secretaria.php"> Perfil </a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php"> Turmas </a>
    <a class="Celula" href="Gerenciamento_de_Disciplina.php"> Diciplinas </a>
    <a class="Celula" href="Seleção_de_Boletim.php" > Editar notas </a>
  </div>

<?php } ?>


  <br>

  <h1>Bem vindo à Concha do Trovão, <?= $UsuarioLogado['Nome'] ?> </h1>

  <div id="Cabecalho" align="center">
	<h2 id="Nome_do_Software">Home Page</h2>
	</div>



  <div id="Informaçoes_de_Usuario">
    Nome:
    <?= $UsuarioLogado['Nome'] ?> <br/>
  </div>

  <div id="Tela_de_Informaçoes">
    Data de nascimento: <br/>  <?= $UsuarioLogado['Data_Nasc'] ?>
      <br/>
      <br/>
      E-mail: <br/>  <?= $UsuarioLogado['Email'] ?>
      <br/>
      <br/>
      Telefone: <br/> <?= $UsuarioLogado['Tel'] ?>
      <br/>
      <br/>

      <?php if ($Classe_Usuario == 1) { ?>
        Matricula: <br/>  <?= $UsuarioLogado['Matricula'] ?>

      <?php } else if ($Classe_Usuario == 2) { ?>

        Siape:  <?= $UsuarioLogado['Siape'] ?>
      <?php } ?>


  </div>


  <div id="Rodape">
    <h2>Desenvolvedores</h2>
    <h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
  </div>

</body>


</html>
