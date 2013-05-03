<?php

class Database extends PDO {

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
    }

    /**
     * 
     * @param type $sql Ein SQL String
     * @param type $array Parameter für Werte
     * @param constant $fetchMode Eine PDO Fetch Mode
     * @return mixed
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {

        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     * insert
     * @param string $table Name of table to insert into
     * @param string $data an associative array
     */
    public function insert($table, $data) {

        ksort($data); // so it's in alphabetical order
        //print_r($data);

        $fieldNames = implode('`,`', array_keys($data)); //``->incase it's a reserved word !
        $fieldValues = ':' . implode(',:', array_keys($data));

        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }

    /**
     * update
     * @param string $table name of table to insert into
     * @param string $data An associative array
     * @param string $where The Where query part
     */
    public function update($table, $data, $where) {
        ksort($data); // so it's in alphabetical order

        $fieldDetails = NULL;
        foreach ($data as $key => $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        //echo $fieldDetails;
        //echo "UPDATE $table SET `$fieldDetails` WHERE $where";
        //die;

        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }

    /**
     * 
     * @param type $table
     * @param type $where
     * @param type $limit
     * @return type
     */
    public function delete($table, $where, $limit = 1) {
        return $this->exec("Delete FROM $table WHERE $where LIMIT $limit");
    }

}
