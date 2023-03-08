<?php

if(isset($_POST['submit'])){

    
    if(empty($_POST['firstname'])){
        $firstnameerr = "First name is required";
    } else {
        $firstname = $_POST['firstname'];
    }

    
    if(empty($_POST['lastname'])){
        $lastnameerr = "Last name is required";
    } else {
        $lastname = $_POST['lastname'];
    }

    
    if(empty($_POST['phone'])){
        $phoneerr = "Phone number is required";
    } else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['email'])){
        $emailerr = "Email address is required";
    } else {
        $email = $_POST['email'];
    }

    
    if(empty($_POST['gender'])){
        $radioerr = "Gender is required";
    } else {
        $gender = $_POST['gender'];
    }

    
    if(empty($_FILES['CVfile']['name'])){
        $CVerr = "CV file is required";
    } else {
        $CVfile = $_FILES['CVfile']['name'];
    }

    
    if(empty($_FILES['NIDfile']['name'])){
        $niderr = "NID file is required";
    } else {
        $NIDfile = $_FILES['NIDfile']['name'];
    }

   
    if(empty($_POST['password'])){
        $passworderr = "Password is required";
    } else {
        $password = $_POST['password'];
    }

    
    if(empty($_POST['confermpassword'])){
        $confermpassworderr = "Confirm password is required";
    } else {
        $confermpassword = $_POST['confermpassword'];
    }

    
    if(isset($firstnameerr) || isset($lastnameerr) || isset($phoneerr) || isset($emailerr) || isset($radioerr) || isset($CVerr) || isset($niderr) || isset($passworderr) || isset($confermpassworderr)){
        $dataerr = "Please fill in all the required fields.";
    } else {

    }
}
?>
