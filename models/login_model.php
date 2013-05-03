<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
        //echo md5('jesse').'<br />';
    }

    public function run() {
        // query should get sanitized
        //$this->db->query("SLECT id FROM user WHERE login = '$login' AND password = '$password'");
        
        
        
        $sth = $this->db->prepare("SELECT id, role FROM user WHERE
            login = :login AND password = :password");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        
        $data = $sth->fetch();
        //print_r($data);
        //die;
        
        //$data = $sth->fetchAll();
        //echo $sth->rowCount();
        
        
        $count = $sth->rowCount();
        if($count > 0){ //=> we have a record
            //login
            //print_r($data);
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header ('location: ../dashboard');
        }else{
            //show an error!
            header ('location: ../login');
        }
    }

}