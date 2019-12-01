<?php 

require_once "../config/ConnMySQL.php";

session_start();

$banco = $_REQUEST['banco'];

$sql = "SELECT * FROM agencia where ban_codigo = $banco AND ( age_usu_id = $_SESSION[logado] or age_valida = 1 ) ORDER BY age_numero;";

$resultado = ConnMySQL::exeQ( $sql );

$texto = "<option value='0'>Selecione</option>";

while( $age = $resultado->fetch_array(1) )
	$texto .= "<option value='$age[age_codigo]'>$age[age_numero]</option>";
	
echo $texto;

?>
