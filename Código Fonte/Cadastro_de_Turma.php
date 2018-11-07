<!DOCTYPE html>

<?php

session_start();

$Erros = null;

if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

?>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Cadastro_de_Turma.css" type="text/css">
  <title> Cadastro de Turma</title>
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

  <br>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>

</body>

</html>
