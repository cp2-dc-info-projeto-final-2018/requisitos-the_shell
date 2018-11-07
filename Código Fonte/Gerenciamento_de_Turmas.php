<!DOCTYPE html>

<html>

<?php

require_once("Controlador/TabelaTurmas.php");

$Turmas = ListaTurmas();

session_start();

?>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Gerenciamento_de_Turmas.css" type="text/css">
  <title> Cadastro de Turma</title>
</head>

<body>

  <div class="Cabecalho">
    <h1 id="Nome_do_Colegio">Colégio Pedro II</h1>
    <h2 id="Nome_do_Software"><font face="arial">SHELL</font></h2>
  </div>

  <fieldset id="Campo_Turmas">
    <table id="Turmas">
      <tr>
        <th class="Nome_Coluna">Turma</th>
        <th class="Nome_Coluna">Série</th>
        <th class="Nome_Coluna">Quantidade de Alunos</th>
        <th class="Nome_Coluna">Integrado</th>
      </tr>
      <?php for ($i = 0; $i <= (count($Turmas) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th class="Celulas"><a name="Turma_Escolhida" href="Turma.php" onclick="VerTurma(<?= $Turmas[$i]["nome"] ?>)"><?= $Turmas[$i]["nome"] ?></a></th>
          <th class="Celulas"> <?= $Turmas[$i]["serie"] ?></th>
          <th class="Celulas"> <?= count(ListaAlunosDaTurma($Turmas[$i]["nome"])) ?></th>
          <th class="Celulas">
            <?php

            if (! empty($Turmas[$i]["1"])) {
              echo "Sim";
            }
            else {
              echo "Não";
            }

            ?>
          </th>
        </tr>

      <?php } ?>
    </table>
  </fieldset>

  <?php

  function VerTurma($Turma)
  {
    global $Turma_Escolhida;

    $Turma = $Turma_Escolhida;

    $_SESSION["Turma_Escolhida"] = $Turma_Escolhida;
  }

  ?>

  <a id="Botao_Cadastrar_Turma" href="Cadastro_de_Turma.php">Cadastrar Turma</a>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>

</body>

</html>
