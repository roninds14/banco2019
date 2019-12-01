<?php 

require_once "../config/ConnMySQL.php";

session_start();

$sql = "INSERT INTO cliente ( `usu_id`, `cli_nome`, `cli_data_cadastro`, `cli_tipo` )values ( $_SESSION[logado], '$_REQUEST[nome]', '".date('Y-m-d')."', 0 );";

$resultado = ConnMySQL::exeQ( $sql );

$i = 1;

$id = ConnMySQL::lastId();

foreach( $_REQUEST as $k => $v ){
	if( stripos( $k, "one_" ) ){
		$obs = 'obs_0'.$i;		
		ConnMySQL::exeQ( "INSERT INTO telefone( tel_numero, tel_obs, tel_tabela, tel_foreng_key) VALUES ( '$v', '$_REQUEST[$obs]', 2, $id );" );		
		$i++;		
	}
}

$_SESSION['cliente'] = true;

header("Location: ../index.php" );	

?>
