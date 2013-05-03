<?php

class Mensa extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        //view->propertyName muss gleich model-functionName() sein !!
        $this->view->mensenList = $this->model->mensenList();
        $this->view->render('mensa/index');
    }
}
