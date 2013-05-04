<?php

class Parser {

    public function insertMensa() {
        /*
         * Der Parser Teil
         * http://stackoverflow.com/questions/3577641/how-to-parse-and-process-html-xml-with-php
         * http://www.codekites.com/php-tutorial-parsing-html-with-domdocument
         */

        // damit keine E_WARNING : type 2 -- DOMDocument::loadHTMLFile() -> fehlerhaftes HTML ?!
        libxml_use_internal_errors(true);

        $url = "http://www.studierendenwerk-hamburg.de/studierendenwerk/de/essen/speiseplaene/";

        $dom = new domDocument;
        $dom->loadHTMLFile($url);

        $finder = new DomXPath($dom);
        $classname = "text";
        $nodes = $finder->query("//div[contains(@class, '$classname')]/p/a");


        $mensen = array();

        $nodes_length = $nodes->length;
        for ($i = 0; $i < $nodes_length; $i++) {
            //echo trim($nodes->item($i)->nodeValue)."<br>";
            $essen = trim($nodes->item($i)->nodeValue);
            //stripslashes($essen);
            //str_replace('"','',$essen);
            $mensen = str_replace(array('"'), ' ', $essen);

            // Kennzeichnung soll auch aus dem Text herausgeholt werden und seperat abgespeichert werden !
            //$essen = preg_replace('/[0-9]/','',$essen);
            //$insert = 'REPLACE INTO ' . $table_name . '(name,bewertung) VALUES("' . $essen . '","' . $essen . '")';
        }

        $st = $this->db->prepare('INSERT INTO mensa (id, name, bewertung) VALUES (:name,:bewertung)');
        $st->execute(array(':name' => "text", ':bewertung' => 0));
    }
    
    
    /**
     * 
     * Parser sollte wie user ähhnlich sein
     * 
     */

//    public function parseURL() {
//        // damit keine E_WARNING : type 2 -- DOMDocument::loadHTMLFile() -> fehlerhaftes HTML ?!
//        libxml_use_internal_errors(true);
//
//        $url = "http://www.studierendenwerk-hamburg.de/studierendenwerk/de/essen/speiseplaene/";
//
//        $dom = new domDocument;
//        $dom->loadHTMLFile($url);
//
//        $finder = new DomXPath($dom);
//        //$classname = "text";
//        $nodes = $finder->query("//div[contains(@class, text)]/p/a");
//
//        $mensen = array();
//
//
//        $nodes_length = $nodes->length;
//        for ($i = 0; $i < $nodes_length; $i++) {
//
//            $essen = trim($nodes->item($i)->nodeValue);
//            $mensen[$i] = str_replace(array('"'), ' ', $essen);
//
//            // Kennzeichnung soll auch aus dem Text herausgeholt werden und seperat abgespeichert werden !
//            //$essen = preg_replace('/[0-9]/','',$essen);
//            //print_r($essen);
//            //return $essen;
//        }
//        //print_r($mensen);
//        $this->mensa = $mensen;
//        //print_r($this->mensa);
//    }

}

?>