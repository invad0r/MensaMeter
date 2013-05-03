<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn'); //static function !
        $role = Session::get('role');

        if ($logged == false || $role != 'owner') {
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

    public function index() {
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }

    public function create() {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        
        //@TODO: Do your error checking!
        
        $this->model->create($data);
        header ('location: '. URL . 'user');
    }

    public function edit($id) {
        //fetch individual user
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }
    
    public function editSave($id) {
        $data = array();
        $data['id'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        
        //print_r($data);
        
        //@TODO: Do your error checking!
        
        $this->model->editSave($data);
        header ('location: '. URL . 'user');
    }

    public function delete($id) {
        $this->model->delete($id);
        header ('location: '. URL . 'user');
    }

}
