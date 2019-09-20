<?php
require_once('../includes/Queries.php');
class Company{
  private $table = "company";
  private $query;
  public function __construct(){
    $this->query = new Queries();
  }

  public function login($data){
    $email = $data['company_username'];
    $password = $data['company_password'];   
    $rs = $this->query->readData($this->table , "company_username = '$email' && company_password = '$password'");
    if(count($rs) == 1){
      return true;
    }else{
      return false;
    }
  }


  
  public function register($data){
    $result = $this->query->addData($this->table ,$data);
    if($id!=false){
      $this->mail->send_mail($data['company_contact_email'],"page to add more details" , "I dont Care");
    }
  }

  public function createCompany($email , $data){
    $data1 = $data['datas'];
    $data2 = $data['files'];
    $this->query->updateData($this->table , $data1 , "company_contact_email = '$email'");
    $this->query->updateData($this->table , $data2 , "company_contact_email = '$email'");
  }
}
?>