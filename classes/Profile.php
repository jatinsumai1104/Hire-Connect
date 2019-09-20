<?php
require_once('../includes/Queries.php');
class Profile{
    private $table = "job_profile";
    private $query;
    public function __construct(){
        $this->query = new Queries();
    }

    public function createProfile($data){
        $result = $this->query->addData($this->table , $data);
        return $result;
    }
}


?>