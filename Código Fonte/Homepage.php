<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaProfessor.php");
require_once("Controlador/TabelaSecretaria.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];

$Classe_Usuario = $UsuarioLogado['id_classe_usuario'];

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
    <a class="Celula" href="Controlador/Abrir_Perfil.php">Perfil</a>
  </div>
<?php
}
else if ($Classe_Usuario == 2)
{ ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php">Turma</a>
    <a class="Celula" href="Controlador/Abrir_Perfil.php">Perfil</a>
  </div>

<?php
}
else if ($Classe_Usuario == 3)
{ ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php">Turma</a>
    <a class="Celula" href="Controlador/Abrir_Perfil.php">Perfil</a>
  </div>
<?php } ?>

  <br>

  <h1>Bem vindo à Concha do Trovão, <?= "$UsuarioLogado['nome']" ?></h1>

  <div id="Cabecalho" align="center">
	<h2 id="Nome_do_Software">Home Page</h2>
	</div>

	<div id="Esquerda">
		<div id="Caixa_de_Botoes">
			<link class="Botoes" href="GerenciamentoDeNotas.html" id="btn_Notas" value="Notas"/>
		</div>
	</div>
	<div id="Direita">

	</div>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
