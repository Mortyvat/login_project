<?php
class Rozvrh extends Controller{
	protected function Index(){
		$viewmodel = new RozvrhModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		$viewmodel = new RozvrhModel();
		$this->returnView($viewmodel->add(), true);
	}
}