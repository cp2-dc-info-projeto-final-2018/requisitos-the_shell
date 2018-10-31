<!DOCTYPE html>

<html>

<head>
  <title>Cadastro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Escolher_Matrícula.css">
</head>

<body>

  <div id="Cabecalho">
    <h2 id="Nome_do_Colegio">Colégio Pedro II</h2>
    <h2 id="Nome_do_Software">SHELL - Notas</h2>
  </div>

  <form>
    <fieldset>
      <legend>Matrícula</legend>
      Digite a matrícula:
      <input type="text" name="Matricula" id="Matricula">
      <br>
      <input type="submit" name="Botao_Cadastrar_Aluno" value="Cadastrar aluno" action="Controlador/Cadastrar_Aluno.php" id="Botao_Cadastrar_Aluno">
    </fieldset>
  </form>

  <div id="Rodape">
		<h2>Desenvolvedores</h2>
		<h4> Carlos Eduardo de França, Danilo Alexandre, Gabriel Rodrigues, João Víctor de Aguiar Nery, Maria Jose.</h4>
	</div>

</body>

</html>
