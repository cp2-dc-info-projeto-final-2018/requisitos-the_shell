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
			<link class="Botoes" href="GerenciamentoDeNotas.html" id="btn_Notas" value="Notas"/>
		</div>
	</div>
	<div id="Direita">

		<div id="Informaçoes_de_Usuario">
			<label class="Info_Label">Nome</label><label id="Nome_Aluno"><?= $Info_Usuario["Nome"] ?></label><br/>
		</div>

		<div id="Tela_de_Informaçoes">
				<label class="Info_Label">Data de nascimento</label> <label class="Info"><?= $Info_Usuario["Data_Nasc"] ?></label>
        <br/>
        <br/>
				<label class="Info_Label">E-mail</label> <label class="Info"><?= $Info_Usuario["Email"] ?></label>
        <br/>
        <br/>
				<label class="Info_Label">Matrícula</label> <label class="Info"><?= $Info_Usuario["Matricula"] ?></label>
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
