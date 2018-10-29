<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");

session_start();

$Login = $_SESSION["Usuário"];

$Info_Usuario = ListaUsuarioPorLogin($Login);

?>

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="Direção.css">
  <title>Portal da Direção</title>
</head>

<body>

	<div id="Cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL - Notas</h2>
	</div>

	<div id="Esquerda">
		<div id="Caixa_de_Botoes">
			<form>
				<input class="Botoes" onclick="Botao_Notas" type="button" id="btn_Notas" value="Notas"/>
				<input class="Botoes" onclick="Botao_Disciplina" type="button" id="btn_Disciplina" value="Disciplina"/>
				<input class="Botoes" onclick="Botao_Turmas" type="button" id="btn_Turmas" value="Turmas"/>
				<input class="Botoes" onclick="Botao_Alunos" type="button" id="" value="Alunos"/>
				<input class="Botoes" onclick="Botao_Professores" type="button" id="" value="Professores"/>

			</form>
		</div>
	</div>
	<div id="Direita">

		<div id="Informaçoes_de_Usuario">
			Nome: <?= $Info_Usuario["Nome"]?>
      <br/>
		</div>

		<div id="Tela_de_Informaçoes">
				Data de nascimento: <?= $Info_Usuario["Data de Nascimento"] ?>
        <br/>
        <br/>
				E-mail: <?= $Info_Usuario["Nome"] ?>
        <br/>
        <br/>
				Siape: <?= $Info_Usuario["Siape"] ?>
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
