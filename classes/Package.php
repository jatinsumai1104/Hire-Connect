<?php
require_once('../includes/Queries.php');
class Package{
    private $table = "package";
    private $query;
    public function __construct(){
        $this->query = new Queries();
    }

    public function createPackage($data){
        $this->query->addData($this->table , $data);
    }
}
?>