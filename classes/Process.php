<?php
require_once("../includes/Queries.php");

class Process{
    private $table = "process";
    private $query;

    public function __construct(){
        $this->query = new Queries();
    }

    public function createProcess($data){
        $this->query->addData($this->table , $data);
    }
}
?>