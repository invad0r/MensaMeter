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
    
    public function xhrGetEssenList() {
        $this->model->xhrGetEssenList();
    }
    
    public function essen(){

        $this->view->essenList = $this->model->essenList();
        $this->view->kategorieList = $this->model->kategorieList();

        $this->view->render('mensa/essen');     

    }
    
    public function hello($name) {
        print json_encode("hello :)" . $name); 
    }
    
    public function hi() {
        echo json_encode('hi');
    }
}
