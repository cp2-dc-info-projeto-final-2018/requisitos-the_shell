<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaProfessores.php");

session_start();

#$Login = $_SESSION["Usuário"];
$UsuarioLogado = $_SESSION['Usuário'];
$Info_Usuario = ListaUsuarioPorLogin($Login);

?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="Professor.css">
  <title>Portal do Professor</title>
</head>

<body>

	<div class="Cabecalho">
		<h2>Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL - Notas</h2>
	</div>

	<div id="Esquerda">
		<div id="Caixa_de_Botoes">
			<form method="get" action="Seleção_de_Boletim.php">
        <button class="Botoes" type="submit" id="btn_Notas" value="Notas">Notas</button>
      </form>
      <form method="get" action="Gerenciamento_de_Turmas.php">
				<button class="Botoes" type="submit" id="btn_Turmas" value="Turmas">Turmas</button>
			</form>
		</div>
	</div>

	<div id="Direita">

		<div id="Informaçoes_de_Usuario">
			 <label class="Info_Label">Nome:</label>
        <br/>
        <label class="Info"> <?= $UsuarioLogado['Nome'] ?> </label>
        <br/>
        <br/>
		</div>

		<div id="Tela_de_Informaçoes">
        <label class="Info_Label">Data de nascimento:</label> 
        <br/>
        <label class="Info"> <?= $UsuarioLogado['Data_Nasc'] ?> </label>
        <br/>
        <label class="Info_Label">E-mail:</label>
        <br/>
        <label class="Info"> <?= $UsuarioLogado['Email'] ?> </label>
        <br/>
        <label class="Info_Label">Telefone:</label> 
        <label class="Info"><?= $UsuarioLogado['Tel'] ?></label>
        <br/>
	</div>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
