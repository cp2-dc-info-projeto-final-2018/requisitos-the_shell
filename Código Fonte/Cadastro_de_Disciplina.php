<!DOCTYPE html>

<html>

<?php

session_start();

$Erros = null;

if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

?>

<head>
  <meta charset="utf-8">
  <title>Cadastro de Disciplina</title>
  <link rel="stylesheet" type="text/css" href="Cadastro_de_Disciplina.css">
</head>

<body>
  <div id="Cabecalho">
    <h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
    <h2 id="Nome_do_Software">SHELL</h2>
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

  <div id="Div_Cadastro">
   <legend>Cadastro de Disciplina</legend>

   <form class="Fonte" method="POST" action="Controlador/Cadastrar_Disciplina.php">
     <fieldset>
       <br>
       <label for="Nome_Disciplina">Nome</label>
       <input name="Nome_Disciplina" type="text">
       <br>
       <br>
       <input name="Cadastrar_Disciplina" type="submit" value="Cadastrar">
     </fieldset>
   </form>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>

</body>

</html>
