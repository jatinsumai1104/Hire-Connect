<?php
require_once('http://localhost/hire_connect/client/includes/Queries.php');
class Service{
    private $table = "service";
    private $query;
    public function __construct(){
        $this->query = new Queries();
    }

    public function createService($data){
      return $this->query->addData($this->table , $data);
    }

    public function getServices(){
      return $this->query->readData($this->table);
    }

}


?>