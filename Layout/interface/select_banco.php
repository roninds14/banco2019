<?php 

require_once "../config/ConnMySQL.php";

session_start();

$sql = "SELECT * FROM banco where ban_usu_id = $_SESSION[logado] or ban_valida = 1 ORDER BY ban_nome;";

$resultado = ConnMySQL::exeQ( $sql );

$texto = "";

while( $banco = $resultado->fetch_array(1) )
	$texto .= "<option value='$banco[ban_codigo]'>$banco[ban_nome]</option>";
	
echo $texto;

?>
