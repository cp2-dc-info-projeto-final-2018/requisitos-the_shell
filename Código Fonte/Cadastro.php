<!DOCTYPE html>

<?php

session_start();
$Erros = null;
if (isset($_SESSION['erros'])) {
    $Erros = $_SESSION['erros'];
}

unset($_SESSION['erros']);

?>

<html>

<head>
  <meta charset="utf-8"/>
  <title>Página de Cadastro</title>
  <link rel="stylesheet" href="Cadastro.css" type="text/css">
</head>

<body>

	<div id="Cabecalho">
		<h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
		<h2 id="Nome_do_Software">SHELL - Notas</h2>
	</div>

  <?php if ($Erros != null) { ?>
    <div id="Exibicao">
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
      </p>
    </div>
  <?php } ?>

	<div id="Div_Cadastro">
		<fieldset>
			<legend>Cadastro</legend>
				<form class="fonte">
					<label for="nome">Nome: </label>
					<input type="text" name="Nome" size="25" required>
					<br/>
          <br/>
					<label>Data de Nascimento: </label>
          <input type="date" name="Data_Nasc" required>
					<br/>
          <br/>
					<label for="email">E-mail: </label>
					<input type="text" name="email" size="30" maxlength="50" required>
					<br/>
          <br/>
					<label for="senha">Digite uma senha: </label>
					<input type="password" name="Senha" required>
					<label for="confirme_senha">Confirmar senha: </label>
					<input type="password" name="Confirmar_Senha" required>
				</form>
		</fieldset>
		<br/>
		<fieldset>
			<legend>Especificação de Cadastro</legend>
			<br/>
				<form class="fonte">
					<INPUT TYPE="radio" NAME="cargo" VALUE="op1"> Professores
					<INPUT TYPE="radio" NAME="cargo" VALUE="op2"> Direção
					<INPUT TYPE="radio" NAME="cargo" VALUE="op3"> Alunos
					<INPUT TYPE="radio" NAME="cargo" VALUE="op4"> Secretaria
					<INPUT TYPE="radio" NAME="cargo" VALUE="op5"> SESOP/NAPNE
					<br/><br/>
					<label>Digite sua matrícula (Alunos): </label>
					<input type="text" name="Matricula">
					<br/><br/>
					<label>Digite seu Siape (Docentes e Servidores): </label>
					<input type="text" name="Siape">
				</form>
		</fieldset>
		<br/>
		<fieldset>
			<legend>Verificação de Alunos</legend>
			<br/>
				<form class="fonte">
					<label>Turma: </label>
					<input type="text" name="Turma">
					<br/><br/>
					<label>Série: </label>
					<input type="text" name="Serie">
				<form/>
		</fieldset>

		<form>
			<br/><br/>
			<input id="Botao_Enviar" type="submit" name="Botao_Enviar" value="Enviar">
		<form/>
	</div>

	<div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>
</body>

</html>
