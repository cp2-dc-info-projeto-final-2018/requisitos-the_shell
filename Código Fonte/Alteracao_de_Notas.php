<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaDisciplina.php");

$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]);

?>

<html>

<head>
  <meta charset="utf-8">
  <title>Alterar notas</title>
  <link rel="stylesheet" href="Alteracao_de_Notas.css" type="text/css">
</head>

<body>
	<div class="Cabecalho">
		<h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
		<h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
	</div>

  <form method="POST" action="Controlador/Alterar_Notas.php">
  	<table id="Boletim">
  		<tr>
  			<th class="Nome_Coluna">Disciplina</th>
  			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
  			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
  			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
  			<th class="Nome_Coluna">Média</th>
  		</tr>
  		<?php
  		for ($i = 0; $i <= (count($Disciplinas) - 1); $i++)
  		{
  			$Boletim = ListaBoletimDoAluno($Aluno, $Disciplinas[$i]["id_disciplina"]);
  		?>
  			<tr class="Linhas">
  				<th class="Celulas"><?= $Disciplinas[$i]["disciplina"] ?></th>
  				<th class="Celulas">
            <?php
            if (empty($Boletim["1cert"])) { ?>
              <input type="number" name="1cert"></input></th>
            <?php
            }
            else {
              echo $Boletim["1cert"];
            }
            ?>
  				<th class="Celulas">
            <?php
            if (empty($Boletim["2cert"])) { ?>
              <input type="number" name="2cert"></input></th>
            <?php
            }
            else {
              echo $Boletim["1cert"];
            } ?>
  				<th class="Celulas">
            <?php
            if (empty($Boletim["3cert"])) { ?>
              <input type="number" name="3cert"></input></th>
            <?php
            }
            else {
              echo $Boletim["1cert"];
            } ?>
  				<th class="Celulas">
            <?php
            $Boletim["media"] = ($Boletim["1cert"] * 3 + $Boletim["2cert"] * 3 + $Boletim["3cert"] * 4)/10;

            if ((! empty($Boletim["1cert"])) && (! empty($Boletim["2cert"])) && (! empty($Boletim["3cert"])))
            {
              echo $Boletim["media"];
            }
            ?>
  			</tr>
  		<?php } ?>
  	</table>
    <br>
    <input type="submit" value="Alterar notas" id="Botao_Alterar_Notas"></input>
  </form>

	<div id="Rodape">
		<h4 class="Desenvolvedores">Desenvolvedores</h4>
		<p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
	</div>

</body>


</html>
