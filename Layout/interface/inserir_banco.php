<?php 

require_once "../config/ConnMySQL.php";

session_start();

$sql = "INSERT INTO `banco`(`ban_codigo`, `ban_nome`, `ban_descricao`, `ban_valida`, ban_usu_id ) VALUES ( '$_REQUEST[codigo]', '$_REQUEST[nome]', '$_REQUEST[descricao]', 0, $_SESSION[logado] )";

$resultado = ConnMySQL::exeQ( $sql );

$_SESSION['banco'] = true;

header("Location: ../index.php" );	

?>
