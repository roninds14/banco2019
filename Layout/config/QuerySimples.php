<?php 
require_once "ConnMySQL.php";

class QuerySimples{
		public $table, $keys, $values;		
		
		function __construct( $table, $inserts ){
			$this->table = $table;
			
			$this->keys = "";
			$this->values = "";		
			
			foreach( $inserts as $k => $v ){
				$this->keys .= $k . ",";
				$this->values .= "'" . $v . "',";
			}
			
			$this->keys = substr( $this->keys, 0, -1 );
			$this->values = substr( $this->values, 0 , -1 );
			
			$this->values = "( ". $this->values ." )";
			
		}
		
		function inserir(){
			$query = "insert into " . $this->table ." (". $this->keys . ") values "	. $this->values . ";";
			
			return ConnMySQL::exeQ( $query );
			
		}
		
		function select(){
			$order = substr( $this->table, 0, 3 ) . "_nome;";
			
			$query = "select ". $this->keys . " from " . $this->table ." order by " . $order;
			
			return ConnMySQL::exeQ( $query ); 	
		
		}
		
		function lastInsert(){
			return ConnMySQL::lastId();		
		}
}
?>