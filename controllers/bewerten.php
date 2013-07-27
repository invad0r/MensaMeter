<?php
class Bewerten extends Controller{

    function __construct() {
        parent::__construct();
        echo "we are in index";
    }
 function index() {
        $this->view->render('bewerten/index');
    }
}