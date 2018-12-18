<!DOCTYPE html>

<?php

require_once("Controlador/TabelaUsuários.php");
require_once("Controlador/TabelaAlunos.php");
require_once("Controlador/TabelaProfessores.php");
require_once("Controlador/TabelaSecretaria.php");

session_start();

$UsuarioLogado = $_SESSION['Usuário'];


$Classe_Usuario = $UsuarioLogado['id_classe'];

?>

<html>

<head>
  <meta charset="utf-8">
  <title>SHELL</title>
  <link rel="stylesheet" type="text/css" href="Homepage.css">
</head>

<body>


<?php if ($Classe_Usuario == 1) { ?>

  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Aluno.php"> Perfil</a>
    <a class="Celula" href="Boletim.php"> Boletim</a>
  </div>

<?php } else if ($Classe_Usuario == 2) { ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home">Home</a>
    <a class="Celula" href="Professor.php"> Perfil </a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php"> Turmas</a>
    <a class="Celula" href="Seleção_de_Boletim.php" > Editar notas </a>
  </div>

<?php } else if ($Classe_Usuario == 3) { ?>
  <div class="Barra_de_Navegacao">
    <a id="SHELL">SHELL</a>
    <a class="Celula" href="#home"> Home </a>
    <a class="Celula" href="Secretaria.php"> Perfil </a>
    <a class="Celula" href="Gerenciamento_de_Turmas.php"> Turmas </a>
    <a class="Celula" href="Gerenciamento_de_Disciplina.php"> Diciplinas </a>
    <a class="Celula" href="Turmas-Disciplinas.php" > Disciplinas das turmas</a>
    <a class="Celula" href="Seleção_de_Boletim.php" > Editar notas </a>
  </div>

<?php } ?>


  <br>
  <br>
  <br>

  <h1>Bem vindo à Concha do Trovão, <?= $UsuarioLogado['Nome'] ?> </h1>

  <div id="Cabecalho" align="center">
	<h2 id="Nome_do_Software">Home Page</h2>
	</div>
  <body>
	<a href="Sair.php"><button>Sair</button></a>

    <br> <n>
    Projeto Final do Curso Técnico em Informática do Colégio Pedro II – Campus Duque de Caxias – 2018 </n>
    <br>

   # Integrantes:  <br>

   Maria Jose Villamizar, Gabriel Rodruigues Nunes, João Victor de Aguiar Nery, Carlos Eduardo França, Danilo Alexandre
   <br>
   <br>

   # Sumário
   - [1* sessão - Proposta](#1*-sessão---Proposta)
   - [2* sessão - CDU](#2*-sessão---CDU)
   - [3* sessão - Modelagem](#3*-sessão---Modelagem)
   - [4* sessão - Manual](#4*-sessão---Manual)
   <br>

   # Propostas
     **descrição:** Sistema voltado para o gerenciamneto de notas em geral, focado na facilidade de permitir o acesso a notas por alunos, professores e outras entidades.

    **stakeholders:** Secretaria e Direção
    <br>

    # CDU
      **diagramas de cdu
      <br>

    # Modelagem
      **diagrama de classes:
      <br>

     **Banco de dados:**
     <br>

     Todas as tabelas:
      - Usuario
      - Turma
      - Professor
      - Aluno
      - Secretaria
      - Professor_Turma
      - Disciplina
      - Turma_Disciplina
      - Classe
      - Boletim
      <br>


    # Manual
      **Sistema de cadastro e Login:**

      ... Cadastro será realizado pela secretaria, que será responsavel de registrar devidos individuos, turmas, avaliações e disciplina no sistema, passando as informações e carateristicas das mesmas.

      ...Já o login irá ser realizado por cada individuo, de acordo com o que ele assinale o que é pedido na página.

      **Sistema de recupera senha:**

     ...Na pagina de Login haverá um botão escrito "esqueci minha senha", que irá fazer uma serie de perguntas de segurança para o caso de um usuario precisar recuperar sua devida senha.

     **sistema de visualização de notas:**

     ...Cada entidade  terá acesso a visualização de notas, em cada perfil estará um botão que da acesso as médias.

      **Sistema de gerenciamento de notas:**

      ...Algumas entidades terão privilégios unicos, como o de lançar e alterar notas.

      **Sistema de gerenciamento de turma, aluno e professores:**

      ...A secretaria irá ser responsavel por gerenciar cada informação de cada entidade.

      **Sistema de gerenciamento de disciplinas:**

     ...Caso determinada disciplina precisar ter certas alterações
     <br>

    # Requisitos funcionais e não funcionais
    <br>

    # Sumário RF
   - [1* RF - Sistema de Acesso](#1*-RF---Proposta)
   - [2* RF - Privilégio de acessos](#2*-RF---Privilégios)
   - [3* RF - Mapa de notas](#3*-RF---Mapa)
   - [4* RF - Status do aluno](#4*-RF---Status)
   <br>

     **Requisitos funcionais:**


      - Sistema de Acesso
      - Privilégio de acessos
      - Mapa de notas
      - Status do aluno
      <br>

       # Sumário RNF
   - [1* RNF - Tipos de acessos](#1*-RNF---TiposDeAcessos)
   - [2* RNF - Segurança tipo HTTPS](#2*-RNF---Segurança)
   - [3* RNF - Sistema de "esqueci minha senha"](#3*-RNF---PercaSenha)
   <br>

     Requisitos não funcionais:
     <br>

      - Tipos de acessos(Aluno, Secretaria e Professor)
      - Segurança tipo HTTPS
      - Sistema de "esqueci minha senha"
      <br>


     Diagramas e suas Entidades
     <br>

  Entidades:
     - Aluno
     - Professor
     - Secretaria
     - Turma
     - Usuario
     <br>



  <div id="Rodape">
    <h2>Desenvolvedores</h2>
    <h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
  </div>

</body>


</html>
