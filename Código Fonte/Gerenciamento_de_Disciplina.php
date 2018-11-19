<!DOCTYPE html>

<html>

<?php

require_once("Controlador/TabelaDisciplina.php");

$Disciplinas[] = ListaDisciplinas();

session_start();

?>

<head>
  <meta charset="utf-8">
  <title>Gerenciamento de Disciplina</title>
  <link rel="stylesheet" type="text/css" href="Gerenciamento_de_Disciplina.css">
</head>

<body>
  <div class="Cabecalho">
    <h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
    <h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
  </div>

  <fieldset id="Campo_Turmas">
    <table id="Turmas">
      <tr>
        <th class="Nome_Coluna">Disciplina</th>
      </tr>
      <?php for ($i = 0; $i <= (count($Disciplinas) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th>
            <?= $Disciplinas[$i]["disciplina"] ?>
          </th>
        </tr>
      <?php } ?>
    </table>
  </fieldset>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>
</body>

</html>
