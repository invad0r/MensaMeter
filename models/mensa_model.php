<?php

class Mensa_Model extends Model {

    function __construct() {
        parent::__construct();
    }
     
    public function essenList(){
        return $this->db->select('SELECT mensa_id,kat_id,name FROM essen');
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

    public function kategorieList() {
        return $this ->db -> select ('SELECT id ,name,preis_std,preis_mit FROM kategorie');
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
        return $this;
        //$data = $sth->fetchAll();
       //echo json_encode($data);
    }
    public function xhrGetKategorie(){
        $id = $_POST['id'];
        $sth= $this->db->prepare('SELECT name,preis_std,preis_mit FROM kategorie WHERE id = "'.$id.'"');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
    }
}
