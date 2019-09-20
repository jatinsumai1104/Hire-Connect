<?php
    require_once("constants.php");
    require_once("../classes/Company.php");
    require_once("../classes/Profile.php");
    require_once("../classes/Process.php");
    require_once("../classes/Package.php");

    session_start();
    $company = new Company();
    $profile = new Profile();
    $package = new Package();
    $process = new Process();


    if(isset($_POST['login_process'])){
        $data = ["company_username"=>$_POST['email'] , "company_password" => $_POST["password"]];
        $rs = $company->login($data);
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

    if(isset($_POST['addProfile'])){
        $data1['job_profile_name'] = $_POST['job_profile_name'];
        $data1['job_profile_description'] = $_POST['job_profile_description'];
        $data1['job_profile_criteria'] = $_POST['job_profile_criteria'];
        $data1['job_profile_bond'] = $_POST['job_profile_bond'];
        $data1['job_profile_registration_start_date'] = $_POST['job_profile_registration_start_date'];
        $data1['job_profile_registration_end_date'] = $_POST['job_profile_registration_end_date'];
        $data1['job_profile_process_start_date'] = $_POST['job_profile_process_start_date'];
        $data1['company_id'] = $_SESSION['company_id'];
        $job_profile_id = $profile->createProfile($data1);

        $data2['job_profile_id'] = $job_profile_id;
        $data2['package_ctc'] = $_POST['package_ctc'];
        $data2['package_lpa'] = $_POST['package_lpa'];
        $data2['package_benefits'] = $_POST['package_benefits'];

        $rs = $process->createProcess($data2);

        header("Location: ".BASEURL."client/dashboard");

    }

?>