<?php

class ConnMySQL{	
	static private $servername = "127.0.0.1",
			$username = "root", # i^VXqKY@!K{]
			$password = "", # byryds14
			$dbname = "trabalho_final_banco", # myvideos
			$conn, $query, $resultado, $last_id;
	
	
	static private function conn(){
		ConnMySQL::$conn = new mysqli( ConnMySQL::$servername, ConnMySQL::$username, ConnMySQL::$password, ConnMySQL::$dbname);
		
		mysqli_set_charset( ConnMySQL::$conn, 'utf8' );		
		
		if( !ConnMySQL::$conn ){
			//echo "Falha na conexão com o Banco de Dados!<br />";
			//echo "Erro: " . mysql_error();
			die();
		}
		
	}
	
	static public function exeQ($query){
		ConnMySQL::conn();
		ConnMySQL::$query = $query;
		
		ConnMySQL::$resultado = ConnMySQL::$conn->query( ConnMySQL::$query );
		
		if( ConnMySQL::$resultado ){
			
			ConnMySQL::$last_id = ConnMySQL::$conn->insert_id;
			
			ConnMySQL::disconnect();
			
			return ConnMySQL::$resultado;
			
		}
		else{
			
			echo "Ocorreu um erro na execução da SQL \n";
			echo "Erro :" . mysqli_error( ConnMySQL::$conn ) . "\n";
			
			echo "SQL: " . $query;
				
			
			ConnMySQL::disconnect();
			
			die();	
			
			header("Location: ../../notfound.php");
		}
	}
	
	static public function lastId(){
		return ConnMySQL::$last_id;
	}

	static private function disconnect(){
		ConnMySQL::$conn->close();
	}		
};

#_=_Parametros_=_
#current_field
#field_count
#lengths
#num_rows
#type

#_=_Métodos_=_
#__construct	 			-> Construtor
#close 						-> Encerra calsse
#free						-> Limpa dados
#data_seek 					-> Retorna se existe determinada linha exite (expera um parametro int - linha )
#fetch_field 				-> Retorna o primeiro campo
#fetch_fields 				-> Retorna todos os campos
#fetch_field_direct 		-> Retorna determinado campo (expera um parametro int - campo )
#fetch_all 					-> Retorna um array (linha) de array (dados) -> DEPRECIADO!!!
#fetch_array	 			-> Retorna um array e posiciona o ponteiro para a proxima linha
#								( sem parametro - retorna array numerico e associativo; parametro: 1 - array associativo, 2 - array numerio, 3 - array numerico e associativo )
#fetch_assoc	 			-> Retorna um array associativo e possiciona para a próxima linha
#fetch_object	 			-> Retrona um objeto e posiciona para o próximo
#fetch_row 					-> Retorna uma linha como array e posiciona para o próximo, ao final retorna FALSE
#field_seek 				-> Retorna um boolean ao verificar se detarminado campo existe
#free_result				-> Limpa objeto

?>