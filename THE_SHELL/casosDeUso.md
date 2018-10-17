# Especificação de Casos de Uso

# Sumário

- [CDU 01 - Autenticação](#cdu-01---autenticação)
- [CDU 02 - Gerenciamento de calendário](#cdu-02---gerenciamento-de-calendário)
- [CDU 03 - Visualização de calendário](#cdu-03---visualização-de-calendário)
- [CDU 04 - Gerenciamento de horários](#cdu-04---gerenciamento-de-horários)
- [CDU 05 - Visualização de horários](#cdu-05---visualização-de-horários)
- [CDU 06 - Visualização de horas de estágio](#cdu-06---visualização-de-horas-de-estágio)
- [CDU 07 - Esqueci minha senha](#cdu-07---esqueci-minha-senha)
- [CDU 08 - Gerenciamento de faltas](#cdu-08---gerenciamento-de-faltas)
- [CDU 09 - Reporte de erros](#cdu-09---reporte-de-erros)
- [CDU 10 - Gerenciamento de horas de estágio](#cdu-10---gerenciamento-de-horas-de-estágio)
- [CDU 11 - Emitir avisos e notificações](#cdu-11---emitir-avisos-e-notificações)
- [CDU 12 - Gerenciamento de notas](#cdu-12---gerenciamento-de-notas)
- [CDU 13 - Gerenciamento de professores](#cdu-13---gerenciamento-de-professores)
- [CDU 14 - Cadastrar disciplina](#cdu-14---cadastrar-disciplina)
- [CDU 15 - Cadastrar avaliações](#cdu-15---cadastrar-avaliações)
- [CDU 16 - Solicitar segunda chamada](#cdu-16---solicitar-segunda-chamada)
- [CDU 17 - Solicitar documentos](#cdu-17---solicitar-documentos)

# CDU 01 - Autenticação
**Atores:** Aluno, Assistência Técnica, SESOP, NAPNE, Direção, Professore, Secretaria e Sistema.

**Pré-condições:** Possuir cadastro.

**Fluxo principal:**
1. Sistema apresenta um campo de texto para que seja digitado seu Login e outro para que seja digitada a senha.
2. Usuário digita Login e Senha e clica no botão "Fazer Login".
3. Sistema verifica as informações e, caso estejam corretas, redireciona para a tela principal.

# CDU 02 -  Gerenciamento de calendário
**Atores:** Direção e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Gerenciar calendário".
2. Sistema redireciona o usuário para uma página apresentando o calendário.
3. Usuário clica no botão "Editar".
4. Sistema gera interface para que possa ser feita a edição do calendário.
5. Ao terminar as alterações, usuário clica no botão "Salvar alterações".
6. Sistema salva as alterações.

# CDU 03 - Visualização de calendário
**Atores:** Aluno, SESOP, NAPNE e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Calendário".
2. Sistema redireciona o usuário para uma página apresentando o calendário.

# CDU 04 - Gerenciamento de horários
**Atores:** Direção, SESOP, NAPNE e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Gerenciar horários".
2. Sistema redireciona o usuário para uma página apresentando os horários.
3. Usuário clica no botão "Editar".
4. Sistema gera interface para que possa ser feita a edição dos horários.
5. Ao terminar as alterações, usuário clica no botão "Salvar alterações".
6. Sistema salva as alterações.

# CDU 05 - Visualização de horários
**Atores:** Aluno, Professor, SESOP e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Horários".
2. Sistema redireciona o usuário para uma página apresentando os horários.

# CDU 06 - Visualização de horas de estágio
**Atores:** Aluno e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário entra em seu perfil de aluno.
2. Usuário clica no botão "Horas de estágio".
3. Sistema redireciona o usuário para uma página apresentando as horas de estágio que o usuário possui, assim como a especificação de cada atividade feita e o número de horas que esta o garantiu.

# CDU 07 - Esqueci minha senha
**Atores:** Aluno, Direção, SESOP, NAPNE, Secretaria, Professores e Sistema.

**Pré-condições:** Possuir um cadastro.

**Fluxo principal:**
1. Usuário clica no botão "Esqueci minha senha".
2. Sistema redireciona o usuário para uma página solicitando seu email e a resposta para uma de suas perguntas de segurança.
3. Usuário preenche os campos solicitados e clica em "Recuperar senha".
4. Caso o email esteja registrado em algum cadastro, uma mensagem será enviada para ele contendo um link para a recuperação da senha.
5. Sistema emite um aviso afirmando que, caso haja um cadastro com o email digitado, uma mensagem será enviada para este com as instruções para a recuperação de senha.
6. Usuário clica no link da recuperação de senha em seu email.
7. Sistema exibe uma página solicitando as novas informações nos campos "Nova senha" e "Confirmar nova senha".
8. Após preencher os campos, o usuário clica em "Alterar senha".
9. Sistema valida as informações, e caso sejam válidas, emite um aviso afirmando que a senha foi alterada, e redireciona o usuário para a tela de login.

# CDU 08 - Gerenciamento de faltas
**Atores:** Direção, SESOP, NAPNE, Professores e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Alunos".
2. Sistema redireciona o usuário para uma página contendo os botões correspondentes a cada turma, e pede para o usuário selecionar uma turma.
3. Usuário seleciona a turma.
4. Sistema exibe os alunos cadastrados em uma nova página.
5. Usuário seleciona o aluno desejado.
6. Sistema redireciona o usuário para uma página contendo as informações do aluno.
7. Usuário clica em "Faltas".
8. Sistema redireciona o usuário para uma página onde o usuário poderá alterar o número de faltas do aluno.
9. Após fazer alterações, usuário clica em "Salvar alterações".
10. Sistema salva as alterações.

# CDU 09 - Reporte de erros
**Atores:** Aluno, SESOP e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Na tela de visualização do boletim, o aluno clica em "Reportar erro".
2. Sistema exibe uma aba solicitando as informações do erro (assunto e descrição).
3. Após preencher todos os campos, usuário clica em "Enviar".
4. Sistema valida os campos, e envia a notificação ao SESOP de que um erro foi reportado, contendo informações a respeito do assunto e da matéria.

# CDU 10 - Gerenciamento de horas de estágio
**Atores:** Professor e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Alunos".
2. Sistema redireciona o usuário para uma página contendo os botões correspondentes a cada turma, e pede para o usuário selecionar uma turma.
3. Usuário seleciona a turma.
4. Sistema exibe os alunos cadastrados em uma nova página.
5. Usuário seleciona o aluno desejado.
6. Sistema redireciona o usuário para uma página contendo as informações do aluno.
7. Usuário clica em "Gerenciar horas de estágio".
8. Sistema redireciona o usuário para uma página apresentando as horas de estágio que o aluno possui, assim como a especificação de cada atividade feita e o número de horas que esta o garantiu.
9. Usuário clica em "Editar".
10. Sistema redireciona o usuário a uma página possibilitando que este adicione novas tarefas valendo horas de estágio e edite as horas de estágio das tarefas anteriores realizadas pelos alunos, assim como o upload de certificados.
11. Usuário faz as alterações, e clica em "Salvar alterações".
12. Sistema salva as alterações.

# CDU 11 - Emitir avisos e notificações
**Atores:** Direção, Secretaria, Professor, Aluno, SESOP, NAPNE e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica em "Emitir aviso".
2. Sistema redireciona usuário a uma página solicitando informações sobre o aviso (assunto, descrição e destinatário)
3. Usuário preenche todos os campos e clica em "Enviar aviso".
4. Sistema envia o aviso aos destinatários.

# CDU 12 - Gerenciamento de notas
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Alunos".
2. Sistema redireciona o usuário para uma página contendo os botões correspondentes a cada turma, e pede para o usuário selecionar uma turma.
3. Usuário seleciona a turma.
4. Sistema exibe os alunos cadastrados em uma nova página.
5. Usuário seleciona o aluno desejado.
6. Sistema redireciona o usuário para uma página contendo as informações do aluno.
7. Usuário clica em "Gerenciar boletim".
8. Sistema redireciona usuário para uma página contendo o boletim do aluno.
9. Usuário clica no botão "Editar".
10. Sistema gera interface para que possa ser feita a edição das notas.
11. Ao terminar as alterações, usuário clica no botão "Salvar alterações".
12. Sistema salva as alterações.

# CDU 13 - Gerenciamento de professores
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Professores".
2. Sistema redireciona o usuário para uma página contendo a lista dos professores cadastrados.
3. Usuário clica no professor que deseja gerenciar.
4. Sistema redireciona usuário para o perfil do professor.
5. Usuário clica no botão editar.
6. Sistema redireciona usuário para uma página para edição das informações do professor.
7. Ao realizar as mudanças, usuário clica em "Salvar alterações".
8. Sistema salva as alterações.

# CDU 14 - Cadastrar disciplina
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Disciplinas".
2. Sistema redireciona o usuário para uma página contendo todas as disciplinas existentes.
3. Usuário clica no botão "Cadastrar disciplina".
4. Sistema redireciona o usuário para uma página contendo as informações da disciplina (nome, descrição, turmas e professores).
5. Ao preencher todos os campos, usuário clica em "Cadastrar disciplina".
6. Sistema valida informações, e cadastra a disciplina.

# CDU 15 - Cadastrar avaliações
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Avaliações".
2. Sistema redireciona o usuário para uma página contendo todas as  existentes.
3. Usuário clica no botão "Cadastrar disciplina".
4. Sistema redireciona o usuário para uma página contendo as informações da disciplina (nome, descrição, turmas e professores).
5. Ao preencher todos os campos, usuário clica em "Cadastrar disciplina".
6. Sistema valida informações, e cadastra a disciplina.

# CDU 16 - Solicitar segunda chamada
**Atores:** Aluno, Secretaria e Sistema.

**Pré-condições:** Estar logado e dentro do prazo para a realização de segunda chamada.

**Fluxo principal:**
1. Usuário clica no botão "Avaliações".
2. Sistema redireciona o usuário para uma página contendo todas as avaliações existentes.
3. Usuário clica no botão "Solicitar segunda chamada".
4. Sistema exibe uma aba solicitando a especificação da avaliação e da razão da segunda chamada.
5. Após preencher os campos, usuário clica em "Enviar solicitação".
6. Sistema envia notificação para a Secretaria, pedindo para confirmar a segunda chamada.
7. Caso seja confirmada, Sistema envia notificação ao aluno contendo as informações sobre as informações da segunda chamada.


# CDU 17 - Solicitar documentos
**Atores:** Aluno, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Solicitar documentos".
2. Sistema redireciona o usuário a uma página solicitando as informações a respeito do documento.
3. Após especificar o documento, usuário clica em "Solicitar documento".
4. Sistema solicita o documento para a Secretaria.
