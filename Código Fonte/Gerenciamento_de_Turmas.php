<!DOCTYPE html>

<html>

<?php

require_once("Controlador/TabelaTurmas.php");

$Turmas = ListaTurmas();

session_start();

$Erros = null;

if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

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
          <th class="Celulas"><a name="Turma" href="Turma.php?id_turma=<?= $Turmas[$i]["id_turma"] ?>"><?= $Turmas[$i]["nome"] ?></a></th>
          <th class="Celulas"> <?= $Turmas[$i]["serie"] ?></th>
          <th class="Celulas"> <?= count(ListaAlunosDaTurma($Turmas[$i]["id_turma"])) ?></th>
          <th class="Celulas">
            <?php

            if ($Turmas[$i]["integrado"] == 1) {
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

    <br>

    <div id="Div_Cadastro">
     <legend>Cadastro de Turma</legend>

     <form class="Fonte" method="POST" action="Controlador/Cadastrar_Turma.php">
       <fieldset>
         <label id="Label_Turma" for="Nome_da_turma">Nome: </label>
         <input type="text" name="Nome_Turma" required>

         </br>
         </br>

         <label for="Serie_Turma">Serie: </label>
         <select name="Serie_Turma" id="Serie">
           <option value="Primeiro Ano">Primeiro Ano</option>
           <option value="Segundo Ano">Segundo Ano</option>
           <option value="Terceiro Ano">Terceiro Ano</option>
         </select>

         <br>
         <br>

         <input type="checkbox" id="Integrado" name="Integrado" value="1"> Integrado

         <br>
         <br>

         <input id="Botao_Cadastrar" type="submit" name="Botao_Enviar" value="Cadastrar">

         <br>
         <br>

       </fieldset>

     </form>
    </div>
  </fieldset>

  <a id="Botao_Cadastrar_Turma" href="Cadastro_de_Turma.php">Cadastrar Turma</a>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>

</body>

</html>
