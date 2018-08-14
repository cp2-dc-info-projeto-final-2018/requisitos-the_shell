# Especificação de Requisitos

## Requisitos funcionais

### RF O1
*Sistema de Acesso* 
Página de login solicitando um número de cadastro e uma senha, para a diferenciação do conteúdo exibido pós login. 
Ex.: Um funcionário da secretaria após seu login tem ações diferentes das de um aluno.
Caso ainda não se tenha cadastro, pode ser efetuado em poucas etapas dispondo apenas do nome completo, matrícula, email, data de nascimento e a resposta de 2 dentre 4 perguntas de segurança pra recuperãçao de conta ou redefinição de senha.
No caso de perda de acesso à conta pode-se recorrer a um sistema de recuperação de conta que dispõe de uma tela onde o usuário dirá sua matrícula 
e responderá as perguntas de segurança do mesmo modo q respondeu no cadastro, podendo após isso escolher uma nova senha.

### RF 02
*Obrigaçoes de cada diferente tipo de acesso*
Professores tem acesso à ferramenta de edição de notas e lançamento da mesma no mapa de notas, por um prazo limitado.
Secretaria tem acesso a mesma ferramenta e outras de gernciamento do calendário, agendamento de provas de 2º chamada em prazo ilimitado
Direção/SESOP/ tem acesso apenas para a visualização.

### RF 03
*Calendário interativo*
Página que conta com a data de provas e eventos do colegio. 
Notifica ao aluno o prazo para requerimento da 2º chamada e quando o professor lançar notas no mapa de notas.

### RF 04
*Mapa de notas*
Exibe todas as notas do aluno logado e dá a opção do mesmo reclamar de alguma nota errada ou ausência de nota.

### RF 05
*Requerimento de 2º chamada*
O aluno pode entrar com um requerimento da prova da 2º chamada a partir do envio de uma justificativa juntamente com a disciplina desejada sinalizando a secretaria dentro do prazo notificado no caledário, caso seja enviado fora do prazo será exibido uma mensagem de fim do prazo. 

### RF 06
*Desempenho*
Verificação do status do aluno, se foi aprovado ou reprovado e o feedback em consideração dos outros trimestres. 

### RF 07

*Visualização de horas de estágio*
O aluno do curso técnico em informática poderá visualizar as horas de estágio correntes até o momento

### RF 08
*Reporte de erros*

O aluno poderá reportar erros de suas notas e justificar o porquê.

### RF 09
*Reporte de bugs*
Todos que encontrarem bugs no Software, poderão reportar para a Assistência técnica.

## Requisitos não-funcionais

### RNF 01

*O software possui 5 tipos de acesso, sendo:*
 
* Tipo 1: Aluno - O Aluno pode visualizar suas notas, horários e arquivos além de notificar erros.
 
* Tipo 2: Professor - O Professor é o responsável pelo lançamento das notas da sua respectiva assinatura, podendo apenas lançar e editar as informações dentro de um prazo já dito somente para seus alunos.

* Tipo 3: Secretaria - A Secretaria pode visualizar e editar todas as notas e arquivos na direção.

* Tipos 4, 5, 6: SESOP, NAPNE, DIREÇÃO - Podem visualizar e "subir" arquivos.

### RNF 02
*Segurança tipo HTTPS*
Segurança tipo criptografia em todo o sofware

### RNF 03
Haverão uma série de perguntas de segurança para caso o usuário precise recuperar sua conta 
 



