<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];

#$Aluno = ListaAlunoPorID($ID_Aluno);

#$Info_Usuario = ListaUsuarioPorLogin($Login);

?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="Aluno.css">
  <title>Portal do Aluno</title>
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

  <div id="Direita">

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
        Matricula: <br/>  <?= $UsuarioLogado['Matricula'] ?>


		</div>

	</div>





	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>
</html>
