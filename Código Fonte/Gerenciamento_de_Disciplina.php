'<!DOCTYPE html>

<html>

<?php

require_once("Controlador/TabelaDisciplina.php");

session_start();

$Disciplinas = ListaDisciplinas();

$Usuario_Logado = $_SESSION["Usuário"];
#ERRO USUARIO LOGADO OU NAO SE NAO ESTIVER LOGADO MANDA PRO LOGIN

$Erros = null;

if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

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

  <?php if ($Erros != null) { ?>

    <div id="Exibicao_de_Erro">
      <p>
        <?php
          if ($Erros != null)
          {
            foreach ($Erros as $Erro)
            {
              echo $Erro;
            }

            unset($Erro);
          }
        ?>

        <br>
      </p>
    </div>
  <?php } ?>


  <fieldset id="Campo_Disciplina">
    <div id="Div_Disciplinas">
      <list id="Disciplinas">
        <h4>Disciplinas</h4>
        <?php for ($i = 0; $i <= (count($Disciplinas) - 1) ; $i++) { ?>
          <ul>
            <li class="Celulas">
              <?= $Disciplinas[$i]["disciplina"] ?> <a href="Gerenciamento_de_Disciplina.php" id="Remover_Btn" value="Remover Botão" type="reset">Remover Botão</a>
            </li>
          </ul>
        <?php } ?>
      </list>
    </div>

    <div id="Div_Cadastro_Disciplina">
      <h4>Adicionar Disciplina</h4>
      <form class="Fonte" method="POST" action="Controlador/Cadastrar_Disciplina.php">
        <br>
        <label for="Nome_Disciplina">Nome</label>
        <input id="Nome_Disciplina" name="Nome_Disciplina" type="text">
        <br>
        <br>
        <input name="Cadastrar_Disciplina" type="submit" value="Cadastrar">
      </form>
    </div>
  </fieldset>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>
</body>

</html>
