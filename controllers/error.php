<?php

class Error extends Controller{

    function __construct() {
        parent::__construct();
        //echo "This is an Error!<br />";
    }
    
    function index(){
        $this->view->msg = "this view doesn't exist";
        $this->view->render('error/index');
    }

}