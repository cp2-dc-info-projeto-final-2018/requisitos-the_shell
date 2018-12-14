<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaSecretaria.php");

session_start();

#$Login = $_SESSION["Usuário"];
$UsuarioLogado = $_SESSION['Usuário'];

#$Info_Usuario = ListaUsuarioPorLogin($Login);

?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="Secretaria.css">
  <title>Portal da Secretaria</title>
</head>

<body>

	<div id="Cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL - Notas</h2>
	</div>

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
				Telefone <br/> <?= $UsuarioLogado['Tel'] ?>
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
