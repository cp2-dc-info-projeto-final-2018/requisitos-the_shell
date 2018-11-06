# Especificação de Casos de Uso

# Sumário

- [CDU 01 - Autenticação](#cdu-01---autenticação)
- [CDU 02 - Esqueci minha senha](#cdu-02---esqueci-minha-senha)
- [CDU 03 - Gerenciamento de notas](#cdu-03---gerenciamento-de-notas)
- [CDU 04 - Gerenciamento de professores](#cdu-04---gerenciamento-de-professores)
- [CDU 05 - Gerenciamento de alunos](#cdu-05---gerenciamento-de-alunos)
- [CDU 06 - Gerenciamento de disciplinas](#cdu-06---gerenciamento-de-disciplinas)
- [CDU 07 - Gerenciamento de Turmas](#cdu-07---gerenciamento-de-turmas)
- [CDU 08- Cadastrar usuario](#cdu-08---cadastrar-usuario)
- [CDU 09 - Cadastrar turma](#cdu-09---cadastrar-turma)
- [CDU 10 - Cadastrar disciplina](#cdu-10---cadastrar-disciplina)
- [CDU 11 - Cadastrar avaliações](#cdu-11---cadastrar-avaliações)


# CDU 01 - Autenticação
**Atores:** Aluno, Assistência Técnica, SESOP, NAPNE, Direção, Professore, Secretaria e Sistema.

**Pré-condições:** Possuir cadastro.

**Fluxo principal:**
1. Sistema apresenta um campo de texto para que seja digitado seu Login e outro para que seja digitada a senha.
2. Usuário digita Login e Senha e clica no botão "Fazer Login".
3. Sistema verifica as informações e, caso estejam corretas, redireciona para a tela principal.

# CDU 02 - Esqueci minha senha
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

# CDU 03 - Gerenciamento de notas
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

# CDU 04 - Gerenciamento de professores
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

# CDU 05 - Gerenciamento de alunos
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "alunos".
2. Sistema redireciona o usuário para uma página contendo a lista dos alunos cadastrados.
3. Usuário clica no professor que deseja gerenciar.
4. Sistema redireciona usuário para o perfil do aluno.
5. Usuário clica no botão editar.
6. Sistema redireciona usuário para uma página para edição das informações do aluno.
7. Ao realizar as mudanças, usuário clica em "Salvar alterações".
8. Sistema salva as alterações.

# CDU 06 - Gerenciamento de disciplinas
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Disciplinas".
2. Sistema redireciona o usuário para uma página contendo a lista das disciplinas existentes.
3. Usuário clica na disciplina que deseja gerenciar.
4. Sistema redireciona usuário para o perfil do professor.
5. Usuário clica no botão editar.
6. Sistema redireciona usuário para uma página para edição de informações sobre determinada disciplina.
7. Ao realizar as mudanças, usuário clica em "Salvar alterações".
8. Sistema salva as alterações.

# CDU 07 - Gerenciamento de turmas
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Turma".
2. Sistema redireciona o usuário para uma página contendo a lista das turmas existentes.
3. Usuário clica na turma, que deseja gerenciar.
4. Sistema redireciona usuário para o perfil da turma.
5. Usuário clica no botão editar.
6. Sistema redireciona usuário para uma página para edição das informações de uma turma.
7. Ao realizar as mudanças, usuário clica em "Salvar alterações".
8. Sistema salva as alterações.

# CDU 08 - Cadastrar usuario
**Atores:** Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "usuario".
2. Sistema redireciona o usuário para uma página contendo um formulário para prosseguir com o cadastramento.
3. Usuário clica no botão "Cadastrar usuario".
4. Sistema redireciona o usuário para uma página atribuir as informações de usuario(nome, matrícula ou siape e senha).
5. Ao preencher todos os campos, usuário clica em "Cadastrar usuario".
6. Sistema valida informações, e cadastra o usuario.

# CDU 09 - Cadastrar turma
**Atores:** Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "turma".
2. Sistema redireciona o usuário para uma página contendo todas as turmas existentes.
3. Usuário clica no botão "Cadastrar turma".
4. Sistema redireciona o usuário para uma página contendo as informações para se atribuir (nome, professores e alunos).
5. Ao preencher todos os campos, usuário clica em "Cadastrar turma".
6. Sistema valida informações, e cadastra a turma.

# CDU 10 - Cadastrar disciplina
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Disciplinas".
2. Sistema redireciona o usuário para uma página contendo todas as disciplinas existentes.
3. Usuário clica no botão "Cadastrar disciplina".
4. Sistema redireciona o usuário para uma página contendo as informações da disciplina (nome, descrição, turmas e professores).
5. Ao preencher todos os campos, usuário clica em "Cadastrar disciplina".
6. Sistema valida informações, e cadastra a disciplina.

# CDU 11 - Cadastrar avaliações
- Cadastrar avaliações
**Atores:** Direção, Secretaria e Sistema.

**Pré-condições:** Estar logado.

**Fluxo principal:**
1. Usuário clica no botão "Avaliações".
2. Sistema redireciona o usuário para uma página contendo todas as  existentes.
3. Usuário clica no botão "Cadastrar disciplina".
4. Sistema redireciona o usuário para uma página contendo as informações da disciplina (nome, descrição, turmas e professores).
5. Ao preencher todos os campos, usuário clica em "Cadastrar disciplina".
6. Sistema valida informações, e cadastra a disciplina.

