<?php
class Bewerten extends Controller{

    function __construct() {
        parent::__construct();
       $this->view->js = array("bewerten/js/default.js"); 
    }
    
 function index() {
        $this->view->render('bewerten/index');
    }
 function bewertung()
 {
 $this->view->render('bewerten/bewertung');  
 }
}