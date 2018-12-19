<!DOCTYPE html>

<?php

require_once("Controlador/TabelaProfessores.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];

$Professores = ListaProfessores();
$Turmas = ListaTurmas();
$Disciplinas = ListaDisciplinas();

$Erros = null;

if (isset($_SESSION['Erros'])) {
    $Erros = $_SESSION['Erros'];
}

unset($_SESSION['Erros']);

?>

<html>

<head>
  <title>Atribuir professor à turma</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Professor_Disciplina_Turma.css">
</head>

<body>
  <?php if ($Classe_Usuario == 1) { ?>

    <div class="Barra_de_Navegacao">
      <a id="SHELL">SHELL</a>
      <a class="Celula" href="Homepage.php">Home</a>
      <a class="Celula" href="Aluno.php">Perfil</a>
      <a class="Celula" href="Boletim.php">Boletim</a>
    </div>

  <?php } else if ($Classe_Usuario == 2) { ?>
    <div class="Barra_de_Navegacao">
      <a id="SHELL">SHELL</a>
      <a class="Celula" href="Homepage.php">Home</a>
      <a class="Celula" href="Professor.php">Perfil</a>
      <a class="Celula" href="Gerenciamento_de_Turmas.php">Turmas</a>
      <a class="Celula" href="Seleção_de_Boletim.php">Notas</a>
    </div>

  <?php } else if ($Classe_Usuario == 3) { ?>
    <div class="Barra_de_Navegacao">
      <a id="SHELL">SHELL</a>
      <a class="Celula" href="Homepage.php">Home</a>
      <a class="Celula" href="Secretaria.php">Perfil</a>
      <a class="Celula" href="Cadastro_de_Usuario.php">Cadastrar Usuários</a>
      <a class="Celula" href="Gerenciamento_de_Disciplina.php">Disciplinas</a>
      <a class="Celula" href="Gerenciamento_de_Turmas.php">Turmas</a>
      <a class="Celula" href="Gerenciamento_de_Professores.php">Professores</a>
      <a class="Celula" href="Gerenciamento_de_Secretaria.php">Secretaria</a>
      <a class="Celula" href="Professor_Disciplina_Turma.php">Turmas e Professores</a>
      <a class="Celula" href="Seleção_de_Boletim.php">Notas</a>
    </div>

  <?php } ?>

  <br>
  <br>
  <br>

  <?php if ($Erros != null) { ?>
    <div id="Exibicao_de_Erro">
      <p>
        <?php
          foreach ($Erros as $Erro)
          {
            echo $Erro;
          }
        ?>
        <br>
      </p>
    </div>
  <?php } ?>

  <fieldset>
    <legend>Professor e Turma</legend>

    <form method="POST" action="Controlador/Associar_Professor_Turma.php">
      <label for="Professor">Professor</label>

      <select name="Professor" required>
        <option value=""></option>
        <?php for ($i = 0; $i <= (count($Professores) - 1); $i++) { ?>
          <option value="<?= $Professores[$i]["ID_Professor"] ?>"><?= $Professores[$i]["Nome"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <label for="Disciplina">Disciplina</label>

      <select name="Disciplina" required>
        <option value=""></option>
        <?php for ($i = 0; $i <= (count($Disciplinas) - 1); $i++) { ?>
          <option value="<?= $Disciplinas[$i]["ID_Disciplina"] ?>"><?= $Disciplinas[$i]["Disciplina"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <label for="Turma">Turma</label>

      <select name="Turma" required>
        <option value=""></option>
        <?php for ($i = 0; $i <= (count($Turmas) - 1); $i++) { ?>
          <option value="<?= $Turmas[$i]["ID_Turma"] ?>"><?= $Turmas[$i]["Nome"] ?></option>
        <?php } ?>
      </select>

      <br>
      <br>

      <input id="Botao_Enviar" name="Enviar" type="submit" value="Enviar">
    </form>
  </fieldset>

</body>

</html>
