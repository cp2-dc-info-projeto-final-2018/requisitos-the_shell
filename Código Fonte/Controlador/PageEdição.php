<!DOCTYPE html>

<?php

require_once("TabelaTurmas.php");

?>

<html>


<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Gerenciamento_de_Turmas.css" type="text/css">
  <title> Edição de Turma</title>
</head>



<body>



  <form action="EditarTurmas.php" method="post" >
  <label> Digite o novo Nome: </label>

Nome:  <input type="text" name="Nome_Turma" value="Nome"> <br/>


<label for="Serie_Turma">Serie: </label>
<select name="Serie_Turma" id="Serie">
  <option value="Primeiro Ano">Primeiro Ano</option>
  <option value="Segundo Ano">Segundo Ano</option>
  <option value="Terceiro Ano">Terceiro Ano</option>

</select>

<br/>


<input type="checkbox" id="Integrado" name="Integrado" value="1"> Integrado <br/>

  <input type="submit" value="Editar" >

  </form>


  <?php
  $Nome_Turma = $_GET["Nome_Turma"];
  $Nome_Turma = $_GET["Serie_Turma"];
  $Nome_Turma = $_GET["Integrado_Turma"];


  AlteraTurma($Nome_Turma);

  header("Location: ../Gerenciamento_de_Turmas.php");

  ?>


</body>






</html>
