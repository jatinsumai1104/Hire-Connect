<?php
require_once('../includes/Queries.php');
class Company{
  private $table = "company";
  private $query;
  public function __construct(){
    $this->query = new Queries();
  }


  public function register($data){
    $result = $this->query->addData($this->table ,$data);
    if($id!=false){
      
    }
  }

  public function createCompany($email , $data){
    $data1 = $data['datas'];
    $data2 = $data['files'];
    $this->query->updateData($this->table , $data1 , "company_contact_email = '$email'");
    $this->query->updateData($this->table , $data2 , "company_contact_email = '$email'");
  }
}
$com = new Company();
?>