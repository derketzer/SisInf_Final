<?php

	class CMS{

		// Anlegen der Instanz
		private static $instance = NULL;
		private static $path = "/home/ketzer/public_html/aplikt.com/";
		private static $modulos = array();
		private static $smarty = NULL;
		private static $mysqli = NULL;
		private static $menu = NULL;
		private static $menuEscuelas = NULL;
		private static $estos = array(' ', '_', 'á', 'é', 'í', 'ó', 'ú', 'ñ');
		private static $porestos = array('-', '-', 'a', 'e', 'i', 'o', 'u', 'n');

		private static $DBuser = "ketzer_tablon";
		private static $DBpass = "Hv8hgTLatHCVGHMnZaWeefhjc";
		private static $DBname = "ketzer_tablon";
		private static $DBhost = "localhost";

		// Konstruktor private, damit die Klasse nur aus sich selbst heraus instanziiert werden kann.
		private function __construct(){}

		// Diese statische Methode gibt die Instanz zurueck.
		public static function getInstance(){

			if (self::$instance === NULL) {
				self::$instance = new self;

				@require_once('/home/ketzer/public_html/aplikt.com/smarty/libs/Smarty.class.php');

				self::$smarty = new Smarty;

				self::$smarty->setTemplateDir('templates/');
				self::$smarty->setCompileDir('smarty/templates_c/');
				self::$smarty->setConfigDir('smarty/configs/');
				self::$smarty->setCacheDir('smarty/cache/');

				self::$smarty->assign("urlBase", "http://www.aplikt.com");

				self::$smarty->assign("title", "An&aacute;huac Comparte");
				self::$smarty->assign("name", "Tabl&oacute;n de Anuncios An&aacute;huac");

				try{
					self::$mysqli = mysqli_init();
					self::$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 20);
					self::$mysqli->real_connect(self::$DBhost, self::$DBuser, self::$DBpass, self::$DBname);
					if (mysqli_connect_errno()) {
						self::$mysqli->close();
						throw new Exception("No se pudo conectar a la DB!");
						exit();
					}
				}catch(Exception $e){
					echo '<div class="errorMessage"><b>Error: '.$e->getMessage().'</b></div>';
				}
				
				if(self::$menuEscuelas == NULL){
					$consulta = self::$mysqli->query("SELECT id_escuela, escuela FROM ta1_escuela ORDER BY escuela ASC");
					$menuEscuelas = array();
					
					while($fila = $consulta->fetch_object()){
						self::$menuEscuelas[] = array("id"=>$fila->id_escuela, "escuela"=>utf8_encode($fila->escuela));
					}
					
					$consulta->close();
				}
				
				self::$smarty->assign("menuEscuelas", self::$menuEscuelas);
				
				if(self::$menu == NULL){
					$consulta = self::$mysqli->query("SELECT id_categoria, categoria, url FROM ta1_categoria ORDER BY categoria ASC");
					self::$menu = array();

					while($fila = $consulta->fetch_assoc()){
						self::$menu[$fila['id_categoria']] = array();
						self::$menu[$fila['id_categoria']]["id"] = $fila['id_categoria'];
						self::$menu[$fila['id_categoria']]["categoria"] = utf8_encode($fila['categoria']);
						self::$menu[$fila['id_categoria']]["url"] = $fila['url'];
						self::$menu[$fila['id_categoria']]["activo"] = "";
					}
					
					$consulta->close();
				}

				self::$smarty->assign("menu", self::$menu);
			}
			
			return self::$instance;
		}
		
		// Klonen per 'clone()' von außen verbieten.
		private function __clone(){}

		function assign($var, $val){
			self::$smarty->assign($var, $val);
		}

		function display($template){
			self::$smarty->display($template);
		}

		function query($query_string){
			return self::$mysqli->query($query_string);
		}

		function insert_id(){
			return self::$mysqli->insert_id;
		}
		
		function close(){
			self::$mysqli->close();
		}

		function menu($id_cat){
			if(self::$menu != NULL){
				self::$menu[$id_cat]['activo'] = " activo";
				self::$smarty->assign("menu", self::$menu);
			}
		}

		function friendly_url($titulo){
			$titulo = strtolower($titulo);
			return str_replace(self::$estos, self::$porestos, $titulo);
		}
}
?>
