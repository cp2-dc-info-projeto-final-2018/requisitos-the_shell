'<!DOCTYPE html>

<script>

function ExcluiDisciplina(id_disciplina, funcao)
{
  location.href = `Controlador/Excluir.php?id_disciplina=${id_disciplina}&excluir=${funcao}`;
}

</script>

<html>

<?php

require_once("Controlador/TabelaDisciplina.php");

session_start();

$Disciplinas = ListaDisciplinas();

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];
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


  <fieldset id="Campo_Disciplina">
    <div id="Div_Disciplinas">
      <table id="Disciplinas">
        <tr>
          <th id="Nome_Tabela">Disciplinas</th>
          <th id="Coluna_Remover">Remover</th>
        </tr>
        <?php for ($i = 0; $i <= (count($Disciplinas) - 1) ; $i++) { ?>
          <tr>
            <td class="Celulas">
              <?= $Disciplinas[$i]["Disciplina"] ?>
            </td>
            <td id="Exclui_Disciplina" name="Exclui_Disciplina" onclick="ExcluiDisciplina(<?= $Disciplinas[$i]["ID_Disciplina"] ?>, 'disciplina')">Excluir</td>
          </tr>
        <?php } ?>
      </table>
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
