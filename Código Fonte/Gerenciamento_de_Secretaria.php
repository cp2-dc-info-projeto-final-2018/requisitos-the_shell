<!DOCTYPE html>


<?php

require_once("Controlador/TabelaSecretaria.php");

$Secretaria = ListaSecretarios();

session_start();

if (! $Classe_Usuario == 3) {
  header("Acesso_Negado.php");
}


?>
<html>
  <fieldset id="">
    <table id="">
      <tr>
        <th class="Nome_Coluna">Nome</th>
      </tr>
      <?php for ($i = 0; $i <= (count($Secretaria) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th class="Celulas"><a name="Secretaria" href="Secretaria.php?id_secretaria=<?= $Secretaria[$i]["ID_Secretaria"] ?>"><?= $Secretaria[$i]["Nome"] ?></a></th>
        </tr>
      <?php } ?>
    </table>
  </fieldset>

</html>
