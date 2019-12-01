<?php 

require_once "../config/ConnMySQL.php";

session_start();

$sql = "INSERT INTO cliente ( `usu_id`, `cli_nome`, `cli_data_cadastro`, `cli_tipo`, cli_cpf )values ( $_SESSION[logado], '$_REQUEST[nome]', '".date('Y-m-d')."', 1, $_REQUEST[cpf] );";

$resultado = ConnMySQL::exeQ( $sql );

$i = 1;

$id = ConnMySQL::lastId();

$sql = "INSERT INTO conta ( con_numero, age_codigo, ban_codigo, cli_id, con_tipo ) values ( '$_REQUEST[num_conta]', $_REQUEST[agencia], $_REQUEST[banco], $id, $_REQUEST[tipo_conta] );";

$resultado = ConnMySQL::exeQ( $sql );

foreach( $_REQUEST as $k => $v ){
	if( stripos( $k, "one_" ) ){
		$obs = 'obs_0'.$i;		
		ConnMySQL::exeQ( "INSERT INTO telefone( tel_numero, tel_obs, tel_tabela, tel_foreng_key) VALUES ( '$v', '$_REQUEST[$obs]', 2, $id );" );		
		$i++;		
	}
}

$_SESSION['correntista'] = true;

header("Location: ../index.php" );	

?>
