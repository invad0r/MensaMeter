<?php

class Mensa_Model extends Model {

    function __construct() {
        parent::__construct();
    }
     
    public function essenList(){
        return $this->db->select('SELECT kat_id,name FROM essen');
    }

   public function mensenList() {

//        return $this->db->select('SELECT id, name FROM mensa WHERE id = :id',array(':id' => 1));

//        $sth = $this->db->prepare('SELECT id, name FROM mensa WHERE name = :name');
//        $sth->execute(array(
//            ':name' => "Finkenau"
//            ));
        $sth = $this->db->prepare('SELECT id, name FROM mensa');
        $sth->execute();

       return $sth->fetchAll();
    }

    public function kategorie() {
        return $this ->db -> select ('SELECT id, name FROM kategorie');
    }
  
//    public function addMensa($data){
//        $this->db->insert('mensa', array(
//            'name' => $data['name'],
//            'bewertung' => $data['bewertung']
//        ));
//    }


    function xhrGetEssenList() {
        $sth = $this->db->prepare('SELECT * FROM essen');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
    }
}
