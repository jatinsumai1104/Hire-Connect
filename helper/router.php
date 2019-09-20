<?php
    require_once("constants.php");
    require_once("../classes/Company.php");
    $company = new Company();


    if(isset($_POST['login_process'])){
        $data = ["company_username"=>$_POST['email'] , "company_password" => $_POST["password"]];
        $rs = $company->login($data);
        // print_r($rs);
        if($rs){
            header("Location: ".BASEURL."client/dashboard");
        }else{
            header("Location: ".BASEURL."client");
        }
    }
?>