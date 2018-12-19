<?php

require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaTurmas.php");
require_once("Controlador/TabelaProfessor_Disciplina_Turma.php");

$Erros = null;

$Turmas = ListaTurmas();

$Disciplinas_da_Turma = [];
$Alunos_da_Turma = [];

if (isset($_SESSION['Erros'])) {
    $Erros = $_SESSION['Erros'];
}

unset($_SESSION['Erros']);

//for ($i = 0; $i <= (count($Turmas) - 1); $i++) {
if (empty($_GET['ID_Turma']) == false) {
  $idTurma = $_GET["ID_Turma"];
  $Disciplinas_da_Turma = ListaDisciplinasDaTurma($idTurma);
}

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];

?>

<!DOCTYPE html>

<html>

<script>

function TurmaSelecionada(ID_Turma)
{
  this.location.href = `Gerador_de_Boletim.php?ID_Turma=${ID_Turma}`;
}

</script>

<head>
  <title>Gerador de Boletim</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Gerador_de_Boletim.css" type="text/css">
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

  <fieldset>
    <legend>Gerador de Boletim</legend>

    <form method="POST" action="Controlador/Gerar_Boletim.php">
      <div id="Div_Turma">
        <label for="Turma">Turma: </label>
        <select id="Turma" name="Turma" onchange="TurmaSelecionada(this.value)">
          <option value=""></option>
          <?php
          for ($i = 0; $i <= (count($Turmas) - 1); $i++)
          { ?>
            <option value="<?= $Turmas[$i]["ID_Turma"] ?>"><?= $Turmas[$i]["Nome"] ?></option>
          <?php
          }

          if (empty($_GET["ID_Turma"]) == false)
          { ?>
            <option selected="selected" value="<?= $_GET['ID_Turma'] ?>"><?= ListaTurmaPorID($_GET['ID_Turma'])["nome"] ?></option>
          <?php
          } ?>
        </select>
      </div>

      <br>
      <br>

      <div>
        <label for="Disciplina">Disciplina: </label>
        <select id="Disciplina" name="Disciplina">
          <option value=""></option>
          <?php for ($i = 0; $i <= (count($Disciplinas_da_Turma) - 1); $i++) { ?>
            <option value="<?= $Disciplinas_da_Turma[$i]["ID_Disciplina"] ?>"><?= $Disciplinas_da_Turma[$i]["Disciplina"] ?></option>
          <?php } ?>
        </select>
      </div>

      <br>
      <br>

      <input id="Gerar_Boletim" name="Gerar_Boletim" type="submit" value="Gerar Boletim">
    </form>
  </fieldset>

  <div id="Rodape">
    <h4 class="Desenvolvedores">Desenvolvedores</h4>
    <p class="Desenvolvedores"> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</p>
  </div>
</body>

</html>
