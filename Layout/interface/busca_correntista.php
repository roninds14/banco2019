<?php 

session_start();

require_once "../config/ConnMySQL.php";

$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];

$or = "";

if( !empty( $cpf ) && !empty( $nome ) )
	$or = " and ( cli_nome like '%$nome%' or cli_cpf like '%$cpf%' )";
else if( empty( $cpf ) && !empty( $nome ) )
	$or = " and cli_nome like '%$nome%' ";
else if( !empty( $cpf ) && empty( $nome ) )
	$or = " and cli_cpf like '%$cpf%' ";

$sql = "SELECT cliente.*, conta.con_id FROM cliente, conta where cliente.cli_tipo = 1 $or and cliente.usu_id = $_SESSION[logado] and cliente.cli_id = conta.cli_id GROUP BY cliente.cli_id;";

$resultado = ConnMySQL::exeQ( $sql );

$texto = "<table class='table table-hover'><thead><tr><th scope='col'>Nome</th><th scope='col'>CPF</th></tr><tbody>";

while( $corr = $resultado->fetch_array(1) )
	$texto .= "<tr class='tr_corr'><td scope='col' style='display:none'>$corr[con_id]</td><td scope='col'>$corr[cli_nome]</td><td scope='col'>$corr[cli_cpf]</td></tr>";

$texto .= "</tbody></table>";

echo $texto;

?>