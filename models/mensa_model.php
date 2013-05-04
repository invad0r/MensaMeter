<?php

class Mensa_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    
    public function mensenList(){
        
        //return $this->parser->parseURL(MENSEN,'//div[contains(@class, text)]/p/a');
        return $this->db->select('SELECT id, name FROM mensa');
     
    }
    
    public function essenList(){
        return $this->db->select('SELECT name FROM essen');

    }
    
//    public function addMensa($data){
//        $this->db->insert('mensa', array(
//            'name' => $data['name'],
//            'bewertung' => $data['bewertung']
//        ));
//    }

}
