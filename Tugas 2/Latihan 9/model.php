<?php

class model {
    function __construct() {
        $this->connection = new mysqli('localhost', 'root', '', 'library');
    }
    public function getData(){
        $query = "SELECT * FROM book";
        $result = $this->connection->query($query);
        return $result;
    }
}