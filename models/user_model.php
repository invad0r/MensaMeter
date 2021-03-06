<?php

class User_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function userList() {
        return $this->db->select('SELECT id, login, role FROM user');
    }

    public function userSingleList($id) {
        return $this->db->select('SELECT id, login, password, role FROM user WHERE id = :id', array(':id' => $id));
    }

    public function create($data) {

        $this->db->insert('user', array(
            'login' => $data['login'],
            'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        ));


//        $sth = $this->db->prepare('INSERT INTO user (`login`, `password`, `role`) VALUES(:login, :password, :role)');
//        $sth->execute(array(
//            ':login' => $data['login'],
//            ':password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
//            ':role' => $data['role']));
    }

    public function editSave($data) {
        $postData = array(
            'login' => $data['login'],
            'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']);

        $this->db->update('user', $postData, "`id` = {$data['id']}");
    }

    public function delete($id) {
        $result = $this->db->select('SELECT role FROM user WHERE id = :id', array(':id' => $id));

        //print_r($result);
        //die();

        if ($result[0]['role'] == 'owner') {
            return false;
        }

        $sth = $this->db->prepare('DELETE FROM user WHERE id = :id');
        $sth->execute(array(':id' => $id));
    }

}
