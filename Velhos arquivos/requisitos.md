# Especificação de Requisitos

## Requisitos funcionais

### RF O1
**Sistema de Acesso**

Página de login solicitando um número de cadastro e uma senha, para a diferenciação do conteúdo exibido pós login. 
Ex.: Um funcionário da secretaria após seu login tem ações diferentes das de um aluno.
Caso ainda não se tenha cadastro, pode ser efetuado em poucas etapas dispondo apenas do nome completo, matrícula, email, data de nascimento e a resposta de 2 dentre 4 perguntas de segurança pra recuperãçao de conta ou redefinição de senha.
No caso de perda de acesso à conta pode-se recorrer a um sistema de recuperação de conta que dispõe de uma tela onde o usuário dirá sua matrícula e responderá as perguntas de segurança do mesmo modo q respondeu no cadastro, podendo após isso escolher uma nova senha.

### RF 02
**Obrigaçoes de cada diferente tipo de acesso**

Professores tem acesso à ferramenta de edição de notas e lançamento da mesma no mapa de notas, por um prazo limitado.
Secretaria tem acesso a mesma ferramenta 

### RF 03
**Mapa de notas**

Exibe todas as notas do aluno logado e dá a opção do mesmo reclamar de alguma nota errada ou ausência de nota.

### RF 04
**Desempenho**

Verificação do status do aluno, se foi aprovado ou reprovado e o feedback em consideração dos outros trimestres. 

## Requisitos não-funcionais

### RNF 01

**O software possui 3 tipos de acesso, sendo:**
 
* Tipo 1: Aluno - O Aluno pode visualizar suas notas, horários e arquivos além de notificar erros.
 
* Tipo 2: Professor - O Professor é o responsável pelo lançamento das notas da sua respectiva assinatura, podendo apenas lançar e editar as informações dentro de um prazo já dito somente para seus alunos.

* Tipo 3: Secretaria - A Secretaria pode visualizar e editar todas as notas e arquivos na direção.

### RNF 02
**Segurança tipo HTTPS**
Segurança tipo criptografia em todo o sofware

### RNF 03
**Sistema de "esqueci minha senha"**
Haverão uma série de perguntas de segurança para caso o usuário precise recuperar sua conta 
 



