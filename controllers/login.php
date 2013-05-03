<?php


class Login extends Controller{

    function __construct() {
        parent::__construct();
        //echo "we are in index";
    }
    
    function index(){
        //require 'models/login_model.php';
        //$model = new Login_Model();
        //echo Hash::create('md5', 'test', HASH_KEY);
        $this->view->render('login/index');
    }
    
    function run(){
        $this->model->run();
    }
}
