<?php

class Mensa extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array("mensa/js/default.js"); //sets js-variable to the view
    }

    function index() {
        //view->propertyName muss gleich model-functionName() sein !!
        $this->view->mensenList = $this->model->mensenList();      
        $this->view->render('mensa/index');
    }
    
    public function essen(){
        $this->view->essenList = $this->model->essenList();
        $this->view->render('mensa/essen');
    }
}
