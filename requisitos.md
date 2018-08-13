# Requisitos

## Requisitos não-funcionais

*RNF 01* O sistema possui três tipos de usuários/papéis
- "Administrador": Pode editar, excluir....
- "Usuário comum": Pode apenas visualizar, sem editar os cadastros
- "": 

*RNF 02* O sistema deve usar HTTPS em todas as transações

# EspecificaÃ§Ã£o de Requisitos

## Requisitos funcionais

*RF O1*
### Sistema de Acesso 

Página de login solicitando um número de cadastro e uma senha, para a diferenciação do conteúdo exibido pós login. 
Ex.: Um funcionário da secretaria após seu login tem ações diferentes das de um aluno.
Caso ainda não se tenha cadastro, pode ser efetuado em poucas etapas dispondo apenas do nome completo, matrícula, email, data de nascimento
e a resposta de 2 dentre 4 perguntas de segurança pra recuperãçao de conta ou redefinição de senha.
No caso de perda de acesso à conta pode-se recorrer a um sistema de recuperação de conta que dispõe de uma tela onde o usuário dirá sua matrícula 
e responderá as perguntas de segurança do mesmo modo q respondeu no cadastro, podendo após isso escolher uma nova senha.

*RF 02*
### Permissões para as diferentes esferas de acesso

Professores/NAPNE tem acesso à ferramenta de edição de notas e lançamento da mesma no mapa de notas, por um prazo limitado.
Secretaria tem acesso a mesma ferramenta e outras de gernciamento do calendário, agendamento de provas de 2º chamada em prazo ilimitado.
Direção/SESOP/ tem acesso apenas para a visualização.
Alunos tem acesso para a visualização de suas próprias notas, requerimento de 2º chamada, desempenho trimestral.

*RF 03*
### Calendário interativo

Página que conta com a data de provas e eventos do colegio. 
Notifica ao aluno o prazo para requerimento da 2º chamada e quando o professor lançar notas no mapa de notas.

*RF 04*
### Mapa de notas

Exibe todas as notas do aluno logado e dá a opção do mesmo reclamar de alguma nota errada ou ausência de nota.

*RF 05*
### Requerimento de 2º chamada

O aluno pode entrar com um requerimento da prova da 2º chamada a partir do envio de uma justificativa juntamente com a disciplina desejada
sinalizando a secretaria dentro do prazo notificado no caledário, caso seja enviado fora do prazo será exibido uma mensagem de fim do prazo. 

*RF 06*
### Desempenho

Verificação do status do aluno, se foi aprovado ou reprovado e o feedback em consideração dos outros trimestres. 

 


