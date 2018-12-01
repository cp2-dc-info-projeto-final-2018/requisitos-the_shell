<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");

session_start();

$Login = $_SESSION["Usuário"];

$ID_Aluno = $_GET["id_aluno"];

$Aluno = ListaAlunoPorID($ID_Aluno);

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
			<label class="Info_Label">Nome</label><label id="Nome_Aluno"><?= $Aluno["Nome"] ?></label><br/>
		</div>

		<div id="Tela_de_Informaçoes">
        <label class="Info_Label">Matrícula</label> <label class="Info"><?= $Aluno["Matricula"] ?></label>
        <br/>
        <br/>
				<label class="Info_Label">Data de nascimento</label> <label class="Info"><?= $Aluno["Data_Nasc"] ?></label>
        <br/>
        <br/>
				<label class="Info_Label">E-mail</label> <label class="Info"><?= $Aluno["Email"] ?></label>
        <br/>
        <br/>
			  <label class="Info_Label">Telefone</label> <label class="Info"><?= $Aluno["Tel"] ?></label>
		</div>

	</div>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>
</html>
