<?php
class Brambory extends Controller{
    protected function Index(){
        $viewmodel = new BramborModel();
        $this->returnView($viewmodel->Index(), true);
        
    }
}