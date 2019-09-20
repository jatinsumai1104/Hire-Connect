<?php
    require_once("../classes/Company.php");
    $company = new Company();


    if(isset($_POST['login_process'])){
        $data = ["company_username"=>$_POST['email'] , "company_password" => $_POST["password"]];
        $rs = $company->login($data);
        if($rs){
            header("Location: client/dashboard");
        }else{
            header("Location: client");
        }
    }
?>