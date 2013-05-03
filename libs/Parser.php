<?php

class Parser {

    public function parseURL($url) {
        // damit keine E_WARNING : type 2 -- DOMDocument::loadHTMLFile() -> fehlerhaftes HTML ?!
        libxml_use_internal_errors(true);

        //$url = "http://www.studierendenwerk-hamburg.de/studierendenwerk/de/essen/speiseplaene/";

        $dom = new domDocument;
        $dom->loadHTMLFile($url);
        if (isset($dom))
            echo"\n dom loaded! \n";
        else
            "\nfailed loading dom\n";

//
//        $finder = new DomXPath($dom);
//        $classname = "text";
//        $nodes = $finder->query("//div[contains(@class, '$classname')]/p/a");
//
//
//        $nodes_length = $nodes->length;
//        for ($i = 0; $i < $nodes_length; $i++) {
//            //echo trim($nodes->item($i)->nodeValue)."<br>";
//            $essen = trim($nodes->item($i)->nodeValue);
//            //stripslashes($essen);
//            //str_replace('"','',$essen);
//            $essen = str_replace(array('"'), ' ', $essen);
//
//            // Kennzeichnung soll auch aus dem Text herausgeholt werden und seperat abgespeichert werden !
//            //$essen = preg_replace('/[0-9]/','',$essen);
//
//            $insert = 'REPLACE INTO ' . $table_name . '(name,bewertung) VALUES("' . $essen . '","' . $essen . '")';
//
//            if (mysqli_query($connection, $insert)) {
//                echo "<br> <b>Inserted successfully :):</b>" . $essen;
//            } else {
//                echo "<br> Error inserting: " . mysqli_error($connection);
//            }
//        }
    }

}