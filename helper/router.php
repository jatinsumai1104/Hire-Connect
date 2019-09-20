<?php
    require_once("constants.php");
    require_once("../classes/Company.php");
    session_start();
    $company = new Company();


    if(isset($_POST['login_process'])){
        $data = ["company_username"=>$_POST['email'] , "company_password" => $_POST["password"]];
        $rs = $company->login($data);
        // print_r($rs);
        if($rs){
            $_SESSION['company_username'] = $rs['company_username'];
            $_SESSION['company_id'] = $rs['company_id'];
            $_SESSION['company_name'] = $rs['company_name'];
            header("Location: ".BASEURL."client/dashboard");
        }else{
            header("Location: ".BASEURL."client");
        }
    }

    if(isset($_POST['register_process'])){
        $data = ["company_name" => $_POST['company_name'] , "company_username" => $_POST["company_username"] , "company_password"=>$_POST['company_password']];
        $company->register($data);
    }

?>