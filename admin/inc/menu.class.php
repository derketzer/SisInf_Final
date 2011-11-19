<?php

	class menu extends CMS{
		private $datas = array();
		private $parents = array();
		private $actual = 0;
		private $url = "";
		private static $instance = NULL

		function __construct(){}
		
		public static function getInstance(){
			$this->url = str_replace("/", "", $_SERVER['SCRIPT_NAME']);
			
			if (self::$instance === NULL) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		function add($o=0, $titulo="", $link=""){
			if($titulo != "" && $link != ""){
				$this->datas[] = array($titulo, $link);
				$nwid = count($this->datas);
				$this->parents[intval($o)][] = $nwid-1;

				return $nwid;
			}
		}

		function output(){
			echo '
				<div id="secciones0" class="limpia">
					<div class="espacio-left">&nbsp;</div>
			';

			foreach($this->parents[0] as $i){
				$extra = "";

				if($this->datas[$i][1] == $this->url){
					$extra = " seccionA";
					$this->actual = $i+1;
				}

				echo '<a href="'.$this->datas[$i][1].'"><div class="seccion0'.$extra.'">'.$this->datas[$i][0].'</div></a>';
			}

			echo "
				</div>
			";

			if(strpos($this->url, "editar") === false){
				foreach($this->parents[0] as $i){
					$this->outsub($i+1);
				}
			}else{
				$link = str_replace("editar", "listado", $this->url);
				echo '
					<div class="subsecciones" class="limpia">
						<div class="espacio-left">&nbsp;</div>
						<a href="'.$link.'"><div class="subseccion subseccionA">Volver</div></a>
						<div class="limpia"></div>
					</div>
				';
			}
		}

		function outsub($o=0){
			if(!$this->parents[$o])
				return;

			$oculto = "display:none;";

			if($o == $this->actual)
				$oculto = "";

			if($oculto != ""){
				if($this->existe($this->parents[$o])){
					$oculto = "";
					echo '
						<script>
							$("#sub'.($o-1).'").addClass("subseccionA");
							$("#sub'.($o-1).'").parent("a").parent("div").css("display", "block");
						</script>
					';
				}
			}

			echo '
				<div class="subsecciones" class="limpia" style="'.$oculto.'" id="sub'.$o.'">
					<div class="espacio-left">&nbsp;</div>
			';

			foreach($this->parents[$o] as $i){
				$extra = "";

				if($this->datas[$i][1] == $this->url){
					$extra = " subseccionA";
				}

				echo '<a href="'.$this->datas[$i][1].'"><div class="subseccion'.$extra.'" id="sub'.$i.'">'.$this->datas[$i][0].'</div></a>';
			}

			echo '
					<div class="limpia"></div>
				</div>
			';

			foreach($this->parents[$o] as $i){
				if($this->parents[$i+1])
					$this->outsub($i+1);
			}
		}

		function existe($arreglo=array()){
			foreach($arreglo as $i){
				if($this->datas[$i][1] == $this->url)
					return true;
			}

			return false;
		}

		function addSeccion($titulo="", $seccion=array(), $o=0){
			if($seccion != array() && $titulo != ""){
				if(is_array($seccion[1]) && $seccion[1] != array()){
					$temp = $this->add($o, $titulo, $seccion[0]);

					foreach($seccion[1] as $nombre=>$url){
						if(is_array($url)){
							$temp2 = $this->add($temp, $nombre, $url[0]);

							foreach($url[1] as $nom=>$sec){
								$this->add($temp2, $nom, $sec);
							}
						}else{
							$temp2 = $this->add($temp, $nombre, $url);
						}
					}
				}else{
					$this->add($o, $titulo, $seccion[0]);
				}
			}
		}
		
		public function generaMenu($url_actual){
			$subsecciones = array();

			foreach($secciones as $nombreSeccion=>$subseccion){
				$id_tree = $this->addSeccion($nombreSeccion, $subseccion);
			}

			$this->output();
		}
	}

?>