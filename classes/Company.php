<?php
require_once('../includes/Queries.php');
require_once('Mailer.php');
class Company{
  private $table = "company";
  private $query;
  private $mail;
  public function __construct(){
    $this->query = new Queries();
    $this->mail = new Mailer();
  }

  public function login($data){
    $email = $data['company_username'];
    $password = $data['company_password'];   
    $rs = $this->query->readData($this->table , "company_username = '$email' AND company_password = '$password'");
    if(count($rs) == 1){
      return $rs;
    }else{
      return false;
    }
  }


  
  public function register($data){
    $result = $this->query->addData($this->table ,$data);
    $this->mail->send_mail($data['company_username'],"page to add more details" , "I dont Care");
  }

  public function createCompany($email , $data){
    $data1 = $data['datas'];
    $data2 = $data['files'];
    $this->query->updateData($this->table , $data1 , "company_contact_email = '$email'");
    $this->query->updateData($this->table , $data2 , "company_contact_email = '$email'");
  }
}
?>