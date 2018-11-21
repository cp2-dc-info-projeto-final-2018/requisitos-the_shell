# THE SHELL

# Projeto Final do Curso Técnico em Informática do Colégio Pedro II – Campus Duque de Caxias – 2018

# Integrantes:
Maria Jose Villamizar Patiño, Gabriel Rodruigues Nunes, João Victor de Aguiar Nery, Carlos Eduardo França, Danilo Alexandre

# Sumário
- [1* sessão - Proposta](#1*-sessão---Proposta)
- [2* sessão - CDU](#2*-sessão---CDU)
- [3* sessão - Modelagem](#3*-sessão---Modelagem)
- [4* sessão - Manual](#4*-sessão---Manual)

# Propostas
  **descrição:** Sistema voltado para o gerenciamneto de notas em geral, focado na facilidade de permitir o acesso a notas por alunos, professores e outras entidades.
 
 **stakeholders:** Secretaria e Direção
 
 **links:**  https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell
 
 # CDU
   **diagramas de cdu:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/diagrama.png.png
   
   **link:** https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/blob/master/casosDeUso.md
 
 
 # Modelagem
   **diagrama de classes:** https://raw.githubusercontent.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/master/C%C3%B3digo%20Fonte/Imagens/Diagrama_classes.png
  
  **Banco de dados:** https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/blob/master/Requisitos/tabelas.sql
  
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
   
 # Requisitos funcionais e não funcionais
 
 # Sumário RF
- [1* RF - Sistema de Acesso](#1*-RF---Proposta)
- [2* RF - Privilégio de acessos](#2*-RF---Privilégios)
- [3* RF - Mapa de notas](#3*-RF---Mapa)
- [4* RF - Status do aluno](#4*-RF---Status)
  
  **Requisitos funcionais:**
   
   
   - Sistema de Acesso
   - Privilégio de acessos
   - Mapa de notas
   - Status do aluno
   
    # Sumário RNF
- [1* RNF - Tipos de acessos](#1*-RNF---TiposDeAcessos)
- [2* RNF - Segurança tipo HTTPS](#2*-RNF---Segurança)
- [3* RNF - Sistema de "esqueci minha senha"](#3*-RNF---PercaSenha)

  **Requisitos não funcionais:**
   
   - Tipos de acessos(Aluno, Secretaria e Professor)
   - Segurança tipo HTTPS
   - Sistema de "esqueci minha senha"
 
 **link:** https://github.com/cp2-dc-info-projeto-final-2018/requisitos-the_shell/blob/master/Velhos%20arquivos/requisitos.md
 
 # Diagramas e suas Entidades
 
 **entidades**
  - Aluno
  - Professor 
  - Secretaria
  - Turma
  - Usuario
  

