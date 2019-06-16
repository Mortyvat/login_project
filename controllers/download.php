models<?php
class Download extends Controller{
	protected function Index(){
		$viewmodel = new DownloadModel();
		$this->returnView($viewmodel->Index(), true);
		
	}
}