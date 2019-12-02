<?php

require_once "config/ConnMySQL.php";

if ( session_status() !== PHP_SESSION_ACTIVE )
	session_start();
		
		
$sql = "SELECT cheque.che_id, cheque.che_numero as numero, cliente.cli_nome as correntista, conta.con_numero as conta, cheque.che_data as data, cheque.che_valor as valor FROM cheque, cliente, conta ".
		" WHERE cheque.bor_id = 0 and cliente.usu_id = $_SESSION[logado] and cheque.con_id = conta.con_id and conta.cli_id = cliente.cli_id;";
		
$result = ConnMySQL::exeQ( $sql );	

$texto = "<table class='table table-hover'><thead><tr><th scope='col'>Número</th><th scope='col'>Correntista</th><th scope='col'>Conta</th><th scope='col'>Data</th><th scope='col'>Valor</th></tr><tbody>";

while( $che = $result->fetch_array(1) )
	$texto .= "<tr class='tr_che'><td scope='col' style='display:none'>$che[che_id]</td><td scope='col'>$che[numero]</td><td scope='col'>$che[correntista]</td><td scope='col'>$che[conta]</td>".
				"<td scope='col'>$che[data]</td><td scope='col'>$che[valor]</td></tr>";

$texto .= "</tbody></table>";

echo $texto;

?>