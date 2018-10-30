<?php
require_once("../../Table/tableuser.php");
    $erros = [];
    $matriculas_cadastradas= [
      'Alexandre' => 'A00001DC',
      'João' => 'A00002DC',
      'Braulino' => 'A00004DC',
      'Geovane' => 'A00005DC',
    ];
    $request = array_map('trim', $_REQUEST);
	$request = filter_var_array(
    $request,
    [
		'nome' => FILTER_DEFAULT,
		'email' => FILTER_VALIDATE_EMAIL,
		'senha' => FILTER_DEFAULT,
		'matricula'=>FILTER_DEFAULT,
	]
          );

    $nome = $request ['nome'];
    if ($nome == false) {
        $erros[] = "O nome informado não é valido";// code...
    }
    elseif (strlen ($nome) < 3 || strlen($nome) > 35) {
      $erros [] =  "A quantidade de caracteres deve ser de 3 a 35";
    }

    $senha = $request['senha'];
    if ($senha == false) {
      $erros[] = "Essa senha é inválida";

    }

    elseif (strlen($senha) < 6 || strlen($senha) > 12 ) {
      	$erros[] = "A quantidade de caracteres deve ser de 6 a 12";

    }

    $cont = 0;
    $matricula = $request['matricula'];
    foreach ($matriculas_cadastradas as $mc) {
      if ($matricula == $mc){
        $cont = 1;
      }
    }
    if (!empty($matricula)){
    if($cont > 0)
    {
      if( buscamatricula($request['matricula'])>0 ){
        $erros[]="Matrícula já cadastrada.";
      }
    }
    else{
      $erros[]="Esta Matrícula não existe.";
    }
  }
    if(buscausuario($request['email'])>0){
        $erros[] = "Email já cadastrado" ;
    }


    if (empty($erros) == true) {
  	insereuser($request);
    }


 ?>

 <?php foreach($erros as $msg) { ?>
 			<script> alert("<?= $msg ?>");</script>
 		<?php } ?>
