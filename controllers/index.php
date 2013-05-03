<?php


class Index extends Controller{

    function __construct() {
        parent::__construct();
        //echo "we are in index";
    }
    
    function index(){
        //echo "INSIDE INDEX INDEX INDEX";
        $this->view->render('index/index');
    }
    
    function details(){
        $this->view->render('index/index');
    }

}
