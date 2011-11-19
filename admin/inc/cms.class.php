<?php

class CMS{

	// Anlegen der Instanz
	private static $instance = NULL;
	private static $path = "/home/ketzer/public_html/aplikt.com/admin/";
	private static $modulos = array();

	// Konstruktor private, damit die Klasse nur aus sich selbst heraus instanziiert werden kann.
	private function __construct(){}

	// Diese statische Methode gibt die Instanz zurueck.
	public static function getInstance(){

		if (self::$instance === NULL) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}
	
	// Klonen per 'clone()' von außen verbieten.
	private function __clone(){}
	
	public static function loadModule($name){
		try{
			if(!in_array($name, self::$modulos)){
				if(file_exists(self::$path."inc/".$name.".class.php")){
					@include_once(self::$path."inc/".$name.".class.php");
					echo self::$instance->loadCSS($name);
					self::$instance->$name = new $name;
					array_push(self::$modulos, $name);
				}else{
					throw new Exception("El m&oacute;dulo no existe!");
				}
			}else{
				throw new Exception("El m&oacute;dulo ya est&aacute; cargado!");
			}
		}catch(Exception $e){
			echo '<div class="errorMessage"><b>Error: '.$e->getMessage().'</b></div>';
		}
	}
	
	public function load($name){
		if(file_exists(self::$path."inc/".$name.".inc.php")){
			@include_once(self::$path."inc/".$name.".inc.php");
		}
	}
	
	public function loadFile($file){
		if(file_exists(self::$path.$file)){
			@include_once(self::$path.$file);
		}
	}
	
	public function loadJS($name){
		if(file_exists(self::$path."js/".$name.".js")){
			return '<script src="'.'/admin/js/'.$name.'.js" type="text/javascript"></script>';
		}
	}
	
	public function loadCSS($name){
		if(file_exists(self::$path."css/".$name.".css")){
			return '<link rel="stylesheet" type="text/css" href="'.'/admin/css/'.$name.'.css" />';
		}
	}
}

?>