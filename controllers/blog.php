<?php
class Blog extends Controller{
	protected function Index(){
		$viewmodel = new BlogModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		$viewmodel = new BlogModel();
		$this->returnView($viewmodel->add(), true);
		
	}
}