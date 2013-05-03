<?php


class Dashboard extends Controller{

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn'); //static function !
        if($logged == false){
            Session::destroy();
            header('location: ../login');
            exit; //Beendet die Ausführung des Skripts.
        }
        
        //print_r($_SESSION);
        
        $this->view->js = array("dashboard/js/default.js"); //sets js-variable to the view
        
    }
    
    /*
     * Funktionen werden über URL aufgerufen !!!!
     */
    
    function index(){
        $this->view->render('dashboard/index');
    }
    
    function logout(){
        Session::destroy();
        header('location: '. URL .'login');
        exit;
    }
    
    function xhrInsert(){
        $this->model->xhrInsert();
    }
    
    function xhrGetListings(){
        $this->model->xhrGetListings();
    }
    
    function xhrDeleteListing(){
        $this->model->xhrDeleteListing();
    }
}
