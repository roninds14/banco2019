<?php 

session_start();

require_once "../config/ConnMySQL.php";

$sql = "INSERT INTO bordero (usu_id, cli_nome, bor_data, bor_descricao, bor_taxa, bor_valor_juros, bor_valor_liquido, bor_valor_bruto) VALUES ( $_SESSION[logado],'$_REQUEST[nome]', '$_REQUEST[data]', '$_REQUEST[descricao]', $_REQUEST[taxa], $_REQUEST[desconto], $_REQUEST[liquido], $_REQUEST[bruto] )";

ConnMySQL::exeQ( $sql );

$last_id = ConnMySQL::lastId();

$ids = explode( ",", $_REQUEST["ids"] );

foreach( $ids as $k => $v )
	ConnMySQL::exeQ( "UPDATE cheque SET bor_id = $last_id where che_id = $v; " );
	
$_SESSION["bordero"] = true;

header("Location: ../index.php");
	
?>