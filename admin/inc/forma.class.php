<?php

	class forma extends CMS{
		private $formulario = "";

		// Konstruktor private, damit die Klasse nur aus sich selbst heraus instanziiert werden kann.
		public function __construct(){
			
		}
		
		public function iniciaForma($name="", $action="", $method="POST"){
			if($action == "")
				$action = $_SERVER['PHP_SELF'];
				
			$this->formulario .= '<form method="'.$method.'" action="'.$action.'" id="'.$name.'">';
		}
		
		public function cierraForma(){
			$this->formulario .= '</form>';
		}
		
		public function inputText($name="", $titulo="", $value="", $class=""){
			if($titulo != ""){
				$this->formulario .= '
					<div class="'.$class.'-linea">
						<div class="'.$class.'-titulo">'.$titulo.'</div>
						<div class="'.$class.'-texto"><input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" class="'.$class.'" /></div>
					</div>
				';
			}else{
				$this->formulario .= '<input type="text" name="'.$name.'" value="'.$value.'" id="'.$name.'" class="'.$class.'" />';
			}
		}
		
		public function inputPassword($name="", $titulo="", $value="", $class=""){
			if($titulo != ""){
				$this->formulario .= '
					<div class="'.$class.'-linea">
						<div class="'.$class.'-titulo">'.$titulo.'</div>
						<div class="'.$class.'-texto"><input type="password" name="'.$name.'" id="'.$name.'" value="'.$value.'" class="'.$class.'" /></div>
					</div>
				';
			}else{
				$this->formulario .= '<input type="password" name="'.$name.'" value="'.$value.'" id="'.$name.'" class="'.$class.'" />';
			}
		}
		
		public function inputHidden($name="", $value=""){
			$this->formulario .= '<input type="hidden" name="'.$name.'" value="'.$value.'" id="'.$name.'" />';
		}
		
		public function tinyMCE($name="", $titulo="", $class="", $texto=""){
			if($titulo != ""){
				$this->formulario .= '
					<div class="'.$class.'-linea">
						<div class="'.$class.'-titulo">'.$titulo.'</div>
						<div class="'.$class.'-texto"><textarea cols="100" rows="10" id="input-tiny" name="'.$name.'">'.$texto.'</textarea></div>
					</div>
				';
			}else{
				$this->formulario .= '<textarea cols="100" rows="10" id="input-tiny" name="'.$name.'">'.$texto.'</textarea>';
			}
		}
		
		public function select($name="", $titulo="", $val=array(), $class="", $defaultIndex=0){
			$temp = '<select name="'.$name.'" id="'.$name.'" size="1">';
			
			for($n=0; $n<count($val); $n++){
				$n==$defaultIndex?$extra=' selected="selected"':$extra="";
				
				$temp .= '<option value="'.array_shift($val[$n]).'"'.$extra.'>'.array_shift($val[$n]).'</option>';
			}
			
			$temp .= '</select>';
			
			if($titulo != ""){
				$this->formulario .= '
					<div class="'.$class.'-linea">
						<div class="'.$class.'-titulo">'.$titulo.'</div>
						<div class="'.$class.'-texto">'.$temp.'</div>
					</div>
				';
			}else{
				$this->formulario .= $temp;
			}
		}
		
		public function checkbox($name="", $titulo="", $caption="", $class="", $checked=false){
			$checked?$extra=' checked="checked"':$extra="";
			
			if($titulo != ""){
				$this->formulario .= '
					<div class="'.$class.'-linea">
						<div class="'.$class.'-titulo">'.$titulo.'</div>
						<div class="'.$class.'-texto"><input type="checkbox" class="'.$class.'" name="'.$name.'" id="'.$name.'"'.$extra.' />&nbsp;'.$caption.'</div>
					</div>
				';
			}else{
				$this->formulario .= '<input type="checkbox" class="'.$class.'" name="'.$name.'" id="'.$name.'"'.$extra.' />&nbsp;'.$caption;
			}
		}
		
		public function submit($name="", $value="", $class=""){
			$this->formulario .= '<div class="'.$class.'-linea '.$class.'-submit"><input type="submit" value="'.$value.'" id="'.$name.'" /></div>';
		}
		
		public function imprime(){
			return $this->formulario;
		}
	}

?>