<!DOCTYPE html>

<?php

require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaDisciplina.php");
session_start();

$Erros = null;
if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

$Turmas = ListaTurmas();
$Disciplinas = ListaDisciplinas();

?>

<body>
	<div id="Cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL</h2>
	</div>

<form action="Turma_Dis.php" method="POST">
	 Turma:
          <select name="Turma" id="Selecionar_Turma">
            <option value=""></option>

            <?php for ($i = 0; $i <= (count($Turmas) - 1) ; $i++) { ?>

              <option value="<?= $Turmas[$i]["iD_turma"] ?>"><?= $Turmas[$i]["Nome"] ?></option>

            <?php } ?>

          </select>

     <br>

     Disciplina:
          <select name="Disciplina" id="Selecionar_Disciplina">
            <option value=""></option>

            <?php for ($i = 0; $i <= (count($Disciplinas) - 1); $i++) { ?>

              <option value="<?= $Disciplinas[$i]['iD_Disciplina'] ?>"><?= $Disciplinas[$i]['Disciplina'] ?></option>

            <?php } ?>
          </select>


     <input id="Botao_Seleccionar" type="submit" name="Botao_Selecciona" value="Visualizar">
</form>


 </body>

</html>
