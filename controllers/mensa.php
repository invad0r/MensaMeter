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
<<<<<<< HEAD
        $this->view->kategorie = $this->model->kategorieList();
=======
        $this->view->kategorieList = $this->model->kategorieList();
>>>>>>> 15325bc9deb7a2fd9043aa8f415c6995a923597e
        $this->view->render('mensa/essen');     

    }
}
