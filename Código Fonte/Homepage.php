<?php

session_start();
$UsuarioLogado = $_SESSION['Usuário'];

?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>SHELL</title>
  <link rel="stylesheet" type="text/css" href="Homepage.css">
</head>

<body>


<?php if ($Classe_Usuario == 1): ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Controlador/Abrir_Perfil.php">Perfil</a>
  </div>
<?php else: ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Controlador/Abrir_Perfil.php">Perfil</a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php">Turma</a>
  </div>

  <?php endif; ?>



  <br>

  <h1>Bem vindo ao SHELL, <?= "$UsuarioLogado" ?></h1>





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
