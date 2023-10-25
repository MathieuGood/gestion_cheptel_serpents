<?php

class Animal {

    private $table = "animal";
    private $id = "";

    public function __construct($my_id="nothing") {
        if ($my_id != "nothing" and $my_id != "new_entry") $this->id = $my_id;
        if ($my_id == "new_entry") {
            $db_connect = new dbConnect();
            $this->id = $db_connect->create($this->table);
        }
    }
    
    public function get($col) {
        $db_connect = new dbConnect();
        return $db_connect->select($this->table, $this->id, $col);
    }

    public function getEverything() {
        $db_connect = new dbConnect();
        return $db_connect->sendQuery("SELECT * FROM `".$this->table."`");
    }

    public function set($col, $value) {
        $db_connect = new dbConnect();
        return $db_connect->execUpdate($this->table, $this->id, $col, $value);
    }

    public function delete($id) {
        $db_connect = new dbConnect();
        $query = "DELETE FROM `".$this->table."` WHERE `id_".$this->table."` = '".$id."'";
        $db_connect->sendQuery($query);
    }

    public function countAnimals() {
        $db_connect = new dbConnect();
        return $db_connect->sendQuery("SELECT COUNT(*) as count_table FROM `".$this->table."`");
    }

    // Récupère prénom + nom à partir du usr_login
    public function getFullName($usr_login) {
        $db_connect = new dbConnect();
        $query = "SELECT `firstname`, `lastname` FROM `".$this->table."` WHERE usr_login = '".$usr_login."'";
        $result = $db_connect->sendQuery($query);
        return $result[0][0]." ".$result[0][1];
    }

    public function selectAll() {
        $db_connect = new dbConnect();
        return $db_connect->sendQuery("SELECT * FROM `".$this->table."`");
    }

    public function getColumnNames() {
        $db_connect = new dbConnect();
        return $db_connect->getColumnNames($this->table);
    }

}


?>