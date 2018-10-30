<?php
function criaconexaobd() {
	$bd = new PDO ('mysql:host=localhost;dbname=instaw;charset=utf8', 'instaw', '123');	
	$bd ->setAttribute (PDO :: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $bd;	
}  
?>