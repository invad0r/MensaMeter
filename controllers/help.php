<?php

class Help extends Controller{

    function __construct() {
        parent::__construct();
        //echo "we are inside help <br />"    
    }

    function index(){
        $this->view->render('help/index');
    }
    
    public function other($arg = false){
        //echo "we are inside other <br />";
        //echo "Optional: ".$arg." <br />";

        require 'models/help_model.php';
        $model = new Help_Model();
        //why can the view call blah ??
        $this->view->blah = $model->blah();
    }
}