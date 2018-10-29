<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");

session_start();

$Login = $_SESSION["Usuário"];

$Info_Usuario = ListaUsuarioPorLogin($Login);

?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="Aluno.css">
  <title>Portal do Aluno</title>
</head>
<body>

	<div id="Cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL - Notas</h2>
	</div>

	<div id="Esquerda">
		<div id="Caixa_de_Botoes">
			<form>
				<input class="Botoes" type="button" name="btn_Notas" onclick="Controlador/Botao_Notas.php" id="btn_Notas" value="Notas"/>
			</form>
		</div>
	</div>
	<div id="Direita">

		<div id="Informaçoes_de_Usuario">
			Nome: <?= $Info_Usuario["Nome"] ?><br/>
		</div>

		<div id="Tela_de_Informaçoes">
				Data de nascimento: <?= $Info_Usuario["Data de Nascimento"] ?>
        <br/>
        <br/>
				E-mail: <?= $Info_Usuario["Email"] ?>
        <br/>
        <br/>
				Matrícula: <?= $Info_Usuario["Matrícula"] ?>
        <br/>
        <br/>
		</div>

	</div>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>
</html>
