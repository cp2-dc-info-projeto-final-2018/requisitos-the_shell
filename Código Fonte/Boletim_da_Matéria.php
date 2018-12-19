<!DOCTYPE html>

<?php

session_start();

require_once("Controlador/TabelaBoletim.php");
require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaDisciplina.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaTurmas.php");

#$Disciplinas = ListaDisciplinas();

$Usuario_Logado = ListaUsuarioPorLogin($_SESSION["Usuário"]["Nome"]);

$UsuarioLogado = $_SESSION['Usuário'];
$Classe_Usuario = $UsuarioLogado['id_classe'];

$ID_Disciplina = $_GET["id_disciplina"];
$ID_Turma = $_GET["id_turma"];

$Alunos_da_Turma = ListaAlunosDaTurma($ID_Turma);
$Notas_da_Turma = ListaNotasDaTurma($ID_Disciplina, $ID_Turma);
$Disciplina = ListaDisciplinaPorID($ID_Disciplina);
$Turma = ListaTurmaPorID($ID_Turma);

?>

<html>

<head>
  <meta charset="utf-8">
  <title>Alterar notas</title>
  <link rel="stylesheet" href="Boletim_da_Matéria.css" type="text/css">
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

  <h2 id="Turma"><?= $Turma['nome'] ?></h2>

  <h3 id="Disciplina"><?= $Disciplina["disciplina"] ?></h3>

  <table id="Boletim">
		<tr>
      <th class="Nome_Coluna">Aluno</th>
			<th class="Nome_Coluna">1<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">2<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">3<sup>a</sup> Certificação</th>
			<th class="Nome_Coluna">Média</th>
		</tr>
    <?php
    for ($i = 0; $i <= (count($Alunos_da_Turma) - 1); $i++)
    {
      $Boletim_do_Aluno = ListaBoletimDoAluno($Alunos_da_Turma[$i]["ID_Usuario"], $ID_Disciplina); ?>
        <tr class="Linhas">
          <td class="Celulas"><a> <?= $Alunos_da_Turma[$i]["Nome"] ?></a></th>
  			  <td class="Celulas">
            <?php
            if (empty($Boletim_do_Aluno["Pri_Cert"]))
            {
              echo "0.0";
            }
            else
            {
              echo $Boletim_do_Aluno["Pri_Cert"];
            }  ?>
          </td>
  			  <td class="Celulas">
            <?php
            if (empty($Boletim_do_Aluno["Seg_Cert"]))
            {
              echo "0.0";
            }
            else
            {
              echo $Boletim_do_Aluno["Seg_Cert"];
            } ?>
          </td>
          <td class="Celulas">
            <?php
            if (empty($Boletim_do_Aluno["Ter_Cert"]))
            {
              echo "0.0";
            }
            else
            {
              echo $Boletim_do_Aluno["Ter_Cert"];
            } ?>
          </td>
  			  <td class="Celulas">
            <?php
            if (empty($Boletim_do_Aluno["Media"]))
            {
              echo "0.0";
            }
            else
            {
              echo $Boletim_do_Aluno["Media"];
            } ?>
          </td>
  		  </tr>
    <?php } ?>


	</table>

	<a id="Botao_Alterar_Notas" href="Lançamento_de_Notas.php?id_disciplina=<?= $Disciplina['id_disciplina'] ?>&id_turma=<?= $Turma['id_turma'] ?>">Alterar Notas</a>
  <a id="Botao_Gerador_de_Boletim" href="Gerador_de_Boletim.php?id_turma=<?= $Turma['id_turma'] ?>">Gerador de Boletim</a>


</body>


</html>
