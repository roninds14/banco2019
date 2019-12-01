<?php 

require_once "../config/ConnMySQL.php";

session_start();

$sql = "INSERT INTO agencia ( ban_codigo, age_numero, age_valida, age_usu_id ) values ( $_REQUEST[banco], '$_REQUEST[num_agencia]', 0, $_SESSION[logado] );";

$resultado = ConnMySQL::exeQ( $sql );

$i = 1;

$id = ConnMySQL::lastId();

foreach( $_REQUEST as $k => $v ){
	if( stripos( $k, "one_" ) ){
		$obs = 'obs_0'.$i;		
		ConnMySQL::exeQ( "INSERT INTO telefone( tel_numero, tel_obs, tel_tabela, tel_foreng_key) VALUES ( '$v', '$_REQUEST[$obs]', 3, $id );" );		
		$i++;		
	}
}

$_SESSION['agencia'] = true;

header("Location: ../index.php" );	

?>
