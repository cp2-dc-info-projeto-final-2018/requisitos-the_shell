<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");

session_start();

$Login = $_SESSION["Usuário"];

$Info_Usuario = ListaUsuarioPorLogin($Login);

?>

<head>
  <meta charset="utf-8"/>
  <title>Página do Sesop</title>
	<link rel="stylesheet" type="text/css" href="Sesop.css">
</head>

<body>

	<div id="Esquerda">
		<div id="Caixa_de_Botoes">
			<form>
				<input class="Botoes" onclick="Controlador/Botao_Notas.php" type="button" id="btn_Notas" value="Notas"/>
				<input class="Botoes" onclick="Controlador/Botao_Disciplina.php" type="button" id="btn_Disciplina" value="Disciplina"/>
				<input class="Botoes" onclick="Controlador/Botao_Notas.php" type="button" id="btn_Turmas" value="Turmas"/>
				<input class="Botoes" onclick="Controlador/Botao_Alunos.php" type="button" id="btn_Alunos" value="Alunos"/>
				<input class="Botoes" onclick="Controlador/Botao_Professores.php" type="button" id="btn_Professores" value="Professores"/>
			</form>
		</div>
	</div>

	<div id="Direita">
		<div  id="Informações_Completas">
			<div id="Direita_1">
				<div id="Imagem_Div">
					<img id="Imagem" src="">
				</div>
			</div>

      <br>

			<div id="Informaçoes_de_Usuario">
				Nome: <?= $Info_Usuario["Nome"] ?>
        <br/>
				Data de nascimento: <?= $Info_Usuario["Data de Nascimento"] ?>
        <br/>
				E-mail: <?= $Info_Usuario["Email"] ?>
        <br/>
        Siape: <?= $Info_Usuario["Siape"] ?><br/>
			</div>
		</div>

		<div id="Tela_de_Informaçoes">
			[TELA DE INFORMAÇÕES]
		</div>

	</div>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
