<?php

	class db extends MySQLi{
		private static $DBhost = "localhost";
		private static $DBuser = "ketzer_tablon";
		private static $DBpass = "Hv8hgTLatHCVGHMnZaWeefhjc";
		private static $DBname = "ketzer_tablon";
		private static $port = "3306";
		private static $socket = "";

		function __construct(){
			try{
				@parent::__construct(self::$DBhost, self::$DBuser, self::$DBpass, self::$DBname, self::$port, self::$socket);

				if(mysqli_connect_errno()){
					@parent::close();
					throw new Exception("No se pudo conectar a la Base de Datos!");
				}
			}catch(Exception $e){
				echo '<div class="errorMessage">Error: '.$e->getMessage().'</div>';
			}
		}
		
		function select($tabla="", $campos="", $where="", $order="", $limit="", $debug=false){
			try{
				if($tabla == ""){
					throw new Exception("El nombre de la tabla no puede ser vacia!");
				}elseif($campos == "" || $campos == array()){
					throw new Exception("Los campos no puede ser vacios!");
				}
				
				$queryString = 'SELECT ';
				
				if($campos != "" || $campos != array()){
					if(is_array($campos)){
						$campos = implode(",", $campos);
					}
				}
				
				$queryString .= $campos.' FROM '.$tabla;
				
				if($where != ""){
					$queryString .= ' WHERE '.$where;
				}elseif($where != array()){
						if(is_array($where)){
							$where = implode(" AND ", $where);
						}
				}
				
				if($order != ""){
					$queryString .= ' ORDER BY '.$order;
				}elseif($order != array()){
					if(is_array($order)){
						$order = implode(",", $order);
					}
				}
				
				if($limit != ""){
					$queryString .= ' LIMIT '.$limit;
				}elseif($limit != array()){
					if(is_array($limit)){
						$limit = implode(",", $limit);
					}
				}
				
				$filas = array();
				
				$queryString = $this->limpiaQuery($queryString);

				if($debug){
					echo $queryString;
				}
				
				if(!($consulta = @parent::query($queryString))){
					throw new Exception("Los cansulta no se pudo llevar a cabo!");
				}
				
				while($fila = $consulta->fetch_assoc()){
					$filas[] = $fila;
				}
				
				$consulta->close();
				
				return $filas;
			}catch(Exception $e){
				echo '<div class="errorMessage">Error: '.$e->getMessage().'</div>';
			}
		}
		
		function limpiaQuery($queryString){
			return addslashes($queryString);
		}
		
	}

?>