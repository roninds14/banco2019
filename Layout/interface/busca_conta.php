<?php

require_once "../config/ConnMySQL.php";

$conta = $_REQUEST["conta"];

$sql = "SELECT conta.*, agencia.age_numero FROM conta, agencia where con_id = $conta and conta.age_codigo = agencia.age_codigo GROUP BY conta.con_id";

$resultado = ConnMySQL::exeQ( $sql );

$array = $resultado->fetch_array(1);

echo json_encode( $array );

?>