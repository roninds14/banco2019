<?php

require_once "../config/ConnMySQL.php";

session_start();

$valores = array();

foreach( $_REQUEST as $k => $v )
	$chaves[ $k ] = $v;

$sql = "INSERT INTO usuario( empresa_emp_id, usu_nome, usu_senha, usu_cpf, data_cadastro) VALUES ( 0, '$chaves[nome]', md5('$chaves[senha]'), '$chaves[cpf]', '".date('Y-m-d')."' );";

$resultado = ConnMySQL::exeQ( $sql );

if($resultado)
	$_SESSION['cadastro'] = true;
else
	$_SESSION['cadastro'] = false;
	
$id = ConnMySQL::lastId();

$i = 1;

foreach( $chaves as $k => $v ){
	if( stripos( $k, "one_" ) ){
		$obs = 'obs_0'.$i;		
		ConnMySQL::exeQ( "INSERT INTO telefone( tel_numero, tel_obs, tel_tabela, tel_foreng_key) VALUES ( '$v', '$chaves[$obs]', 1, $id );" );		
		$i++;		
	}
}
	
header("Location: ../index.php" );		

?>