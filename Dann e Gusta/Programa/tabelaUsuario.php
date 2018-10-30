<?php
  require_once("criarconexaobd.php");

  function insereuser($dadosuser){
    $bd = criaconexaobd();
    $sql = $bd -> prepare(
		"INSERT INTO usuario (nome, senha, email )
    	Values (:valnome, :valsenha, :valemail);");

      $senha = $dadosuser['senha'];
      $hash = password_hash($senha, PASSWORD_DEFAULT);

      $sql -> bindValue(':valnome', $dadosuser['nome']);
      $sql -> bindValue(':valsenha', $hash);
      $sql -> bindValue(':valemail', $dadosuser['email']);
      $sql -> execute();
      $lastId = $bd -> lastInsertId();

      if(!empty($dadosuser['matricula'] )) {
          $sql = $bd -> prepare(
            "INSERT INTO professor (id, matricula)
          	Values (:valid, :valmat);");
              $sql -> bindValue(':valid', $lastId);
            	$sql -> bindValue(':valmat', $dadosuser['matricula']);
              $sql -> execute();
        }
  }

  function buscausuario(string $emailigual)
  {
  	$bd = criaconexaobd();
  	$sql = $bd -> prepare 
	(
		"select email from usuario
		where email = :valemail"
  	);
		$sql -> bindValue(':valemail', $emailigual);
		$sql -> execute();
	return $sql -> rowCount();
  }

  function buscamatricula(string $matriculaigual)
  {
  	$bd = criaconexaobd();
  	$sql = $bd -> prepare 
	(
		"select matricula from professor
		where matricula = :valmat"
  	);


		$sql -> bindValue(':valmat', $matriculaigual);
		$sql -> execute();
    return $sql -> rowCount();
  }
?>
