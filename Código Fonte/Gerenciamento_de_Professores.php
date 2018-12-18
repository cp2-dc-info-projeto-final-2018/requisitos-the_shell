<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessores.php");

$Professores = ListaProfessores();

session_start();

if (! $Classe_Usuario == 3) {
  header("Acesso_Negado.php");
}


?>

<html>

<head>
  <title>Professores</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Gerenciamento_de_Professores.css" type="text/css">
</head>

<body>

  <fieldset id="Campo_Professores">
    <table id="Professores">
      <tr>
        <th class="Nome_Coluna">Nome</th>
      </tr>
      <?php for ($i = 0; $i <= (count($Professores) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th class="Celulas"><a name="Professor" href="Professor.php?id_professor=<?= $Professores[$i]["ID_Professor"] ?>"><?= $Professores[$i]["Nome"] ?></a></th>
        </tr>
      <?php } ?>
    </table>
  </fieldset>

</body>


</html>
