<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		//echo "debug0 v bootstrap_construct->request ";
		//print_r($this->request);
		
		if($this->request['controller'] == ""){
			$this->controller = 'home';
			//echo "<br>debug1 ziskal jsem hodnotu controlleru: ".$this->controller . "<br>";
		} else {
			$this->controller = $this->request['controller'];
			//echo "<br>debug1 ziskal jsem hodnotu controlleru: ".$this->controller . "<br>";
		}
		if($this->request['action'] == ""){
			$this->action = 'index';
			//echo "debug2 ziskal jsem hodnotu actionu: ".$this->action . "<br>";
		} else {
			$this->action = $this->request['action'];
			//echo "debug2 ziskal jsem hodnotu actionu: ".$this->action . "<br>";
		}
	}

	public function createController(){
		// Check Class
		if(class_exists($this->controller)){
		    //echo "debug4 bootstrap/createController (".$this->controller.") Rodice ";
			$parents = class_parents($this->controller);
			//print_r($parents);
			// Check Extend
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
					
				} else {
					// Method Does Not Exist
					//echo '<h1>Method does not exist</h1>';
					return;
				}
			} else {
				// Base Controller Does Not Exist
				//echo '<h1>Base controller not found</h1>';
				return;
			}
		} else {
			// Controller Class Does Not Exist
			//echo '<h1>Controller class does not exist</h1>';
			return;
		}
	}
}