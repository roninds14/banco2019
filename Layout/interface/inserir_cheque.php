<?php

session_start();

require_once "../config/ConnMySQL.php";

$valor = str_replace( ",", ".", $_REQUEST['valor'] );

if( empty($_REQUEST["data"] ) )
	$data = date('Y-m-d');
else
	$data = $_REQUEST["data"];

$sql = "INSERT INTO cheque (con_id, sit_id, che_numero, che_data, che_valor) VALUES ".
	"( $_REQUEST[conta], $_REQUEST[situacao], '$_REQUEST[cheque]', '$data', $valor );";

ConnMySQL::exeQ( $sql );

$_SESSION["cheque"] = true;

header("Location: ../index.php");

?>