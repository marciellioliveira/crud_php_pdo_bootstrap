<?php /* Abre conexão da base de dados do MYSQL para a extensão PDO nesse arquivo */ ?>

<?php 

	$db_host = 'localhost'; //Servidor localhosto do Xampp
	$dv_user = 'root'; //O username da base de dados
	$db_password = ''; //A senha da base de dados
	$db_name = '_mol_crudbase'; //O nome da base de dados

	try {

	} catch(PDOEXCEPTION $erro) {
		$erro->getMessage();
	}

?>