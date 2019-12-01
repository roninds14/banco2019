<?php

session_start();

require_once "../config/ConnMySQL.php";

$valores = array();

foreach( $_REQUEST as $k => $v )
	$chaves[ $k ] = $v;

$sql = "SELECT * FROM USUARIO where usu_cpf = '$chaves[usuario]' and usu_senha = md5('$chaves[senha]');";

$resultado = ConnMySQL::exeQ( $sql );

if( $resultado->num_rows ){
	$re = $resultado->fetch_array(1);
	
	$_SESSION["logado"] = $re['usu_id'];
	
	$_SESSION["dados"] = $re;
	
	$sql = "SELECT tel_numero FROM telefone where tel_foreng_key = $re[usu_id] and tel_tabela = 1";
	
	$telefones = ConnMySQL::exeQ( $sql );
	
	$virgula = "";
	
	while( $fo = $telefones->fetch_array(1) ){
		
		$_SESSION["dados"]['telefones'] = $_SESSION["dados"]['telefones'] . $virgula;
		
		$_SESSION["dados"]['telefones'] = $_SESSION["dados"]['telefones'] . $fo["tel_numero"];
		
		$virgula = ", ";
	}
}
else
	$_SESSION['bad_login']  = true;

header("Location: ../index.php" );		
	
?>