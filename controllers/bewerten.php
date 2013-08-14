<?php
class Bewerten extends Controller{

    function __construct() {
        parent::__construct();
       
    }
    
 function index() {
        $this->view->render('bewerten/index');
    }
 function bewertung()
 {
 $this->view->render('bewerten/bewertung');  
 }
}