# THE SHELL

# Projeto Final do Curso Técnico em Informática do Colégio Pedro II – Campus Duque de Caxias – 2018

# Integrantes:
Maria Jose Villamizar Patiño, Gabriel Rodrigues Nunes, João Victor de Aguiar Nery, Carlos Eduardo França e Danilo Alexandre.

# Sumário
- [1* sessão - Proposta](#1*-sessão---Proposta)
- [2* sessão - CDU](#2*-sessão---CDU)
- [3* sessão - Modelagem](#3*-sessão---Modelagem)
- [4* sessão - Manual](#4*-sessão---Manual)

# Propostas
  **Descrição:** Sistema voltado para o gerenciamneto de notas em geral, tendo seu foco em permitir o armazenamento das notas dos alunos pelos professores e pela secretaria, e a visualização dessas notas pelos alunos.
 
 **Stakeholders:** Secretaria e Direção.
 
 **Links:**  https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell
 
 # CDU
   **Diagramas de CDU:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/diagrama.png.png
   
   **Link:** https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/blob/master/casosDeUso.md
 
 
 # Modelagem
   **Diagrama de Classes:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Diagrama_classes.png
  
  **Banco de dados:** https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/blob/master/Requisitos/tabelas.sql
  
  Todas as tabelas:
   - Usuario
   - Turma
   - Professor
   - Aluno
   - Secretaria 
   - Disciplina
   - Professor_Disciplina_Turma
   - Classe 
   - Boletim 
 
 
 # Manual
   **Sistema de Cadastro e Login:**
   
   ... Cadastro será realizado pela secretaria, que será responsavel de registrar individuos, turmas, avaliações e disciplinas no sistema, passando as informações necessárias das mesmas. 
   
   **Link:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Prints/IMG_4606.jpg
   
   ... Já o login irá ser realizado por cada individuo.
   
   **Link:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Prints/IMG_4610-1.jpg
   
   **Sistema de Recuperação de Senha:**
  
  ... Na pagina de Login haverá um botão escrito "esqueci minha senha", que irá fazer uma serie de perguntas de segurança para o caso de um usuario precisar recuperar sua senha.
  
  **sistema de Visualização de Notas:**
  
  ... Cada entidade terá acesso a visualização de notas por meio de um botão na barra de navegação.
   
   **Sistema de Gerenciamento de Notas:**
   
   ... Algumas entidades terão privilégios unicos, como o de lançar e alterar notas.
   
   **Link:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Prints/IMG_4608.jpg
   
   **Sistema de Gerenciamento de Turmas, Alunos e Professores:**
   
   ... A secretaria irá ser responsável por gerenciar as informações de cada entidade.
   
   **link:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Prints/IMG_4605.jpg
    
   **Link:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Prints/IMG_4609.jpg
   
   **Sistema de gerenciamento de disciplinas:**
  
  ... Caso determinada disciplina precisar ter certas alterações.
   
 # Requisitos funcionais e não funcionais
 
 # Sumário RF
- [1* RF - Sistema de Acesso](#1*-RF---Proposta)
- [2* RF - Privilégio de acessos](#2*-RF---Privilégios)
- [3* RF - Mapa de notas](#3*-RF---Mapa)
- [4* RF - Status do aluno](#4*-RF---Status)
  
  **Requisitos Funcionais:**
   
   
   - Sistema de acesso
   - Privilégio de acessos
   - Mapa de notas
   
    # Sumário RNF
- [1* RNF - Tipos de acessos](#1*-RNF---TiposDeAcessos)
- [2* RNF - Segurança tipo HTTPS](#2*-RNF---Segurança)
- [3* RNF - Sistema de "esqueci minha senha"](#3*-RNF---PercaSenha)

  **Requisitos não funcionais:**
   
   - Tipos de acessos(Aluno, Secretaria e Professor)
   - Segurança tipo HTTPS
   - Sistema de "esqueci minha senha"
 
 **Link:** https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/blob/master/Velhos%20arquivos/requisitos.md
 
 # Diagramas e Suas Entidades
 
 **Entidades**
  - Aluno
  - Professor 
  - Secretaria
  - Turma
  - Usuario
  

