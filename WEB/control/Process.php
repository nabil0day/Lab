<?php
$firstnameerr = $lastnameerr = $ageerr = $phoneerr =  $radioerr = "";
$emailerr = $fileerr = $niderr =  $dataerr = $passworderr = $verifypassworderr= "";
$count = 0;
setcookie("visit","1",time());

if (isset($_POST["Submit"])) {

    $firstname = $_POST["firstname"];

    if (empty($firstname) || strlen($firstname) < 2) {
        $firstnameerr = "->Please enter a valid name";
    } elseif(is_numeric($firstname)){
        $firstnameerr = "->Name can't be any number";
    } else {
        $count++;
        $firstnameerr = "->Your first name is " . $firstname;
    }

    $lastname = $_POST["lastname"];

    if (empty($lastname)) {
        $lastnameerr = "->Please enter a valid name";
    } elseif(is_numeric($lastname)){
        $lastnameerr = "->Name can't be any number";
    } else {
        $count++;
        $lastnameerr = "->Your last name is " . $lastname;
    }

    $address = $_POST["address"];

    if (empty($address)) {
        $addresserr = "->Please enter a valid address";
    } elseif(is_numeric($address)){
        $addresserr = "->Address can't be any number";
    } else {
        $count++;
        $addresserr = "->Your address is " . $address;
    }
     
    $phone = $_POST["phone"];
    if (!is_numeric($phone)) {
        $phoneerr = "->Please enter your number";
    } else {
        $count++;
        $phoneerr = "-> Your number is " . $phone;
    }

    $email = $_POST["email"];
    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $emailerr = "->please enter a valid email";
    } else {
        $count++;
        $emailerr = "->Your email is " . $email;
    }

    $gender = $_POST["gender"];

    if (isset($_POST["gender"])) {
        $count++;
        $radioerr = "-> You are " . $_POST["gender"];
    } else {
        $radioerr = "->Please select your Gender";
    }

    if ($_FILES["CVfile"]["type"]=="image/jpeg" ){
        if(move_uploaded_file($_FILES["CVfile"]["tmp_name"], "../Upload/".$firstname.date("Y-m-d").".jpg")){
            $count++;
            $fileerr="->You have selected ".$_FILES["CVfile"]["name"];
            
        }
        else{
            $fileerr="->Please choose a jpg file under 25mb";
        }
    }
    else{
        $fileerr="->Please choose a jpg file under 25mb";
    }

    if ($_FILES["NIDfile"]["type"]=="image/jpeg" ){
        if(move_uploaded_file($_FILES["NIDfile"]["tmp_name"], "../Upload/".$firstname.date("Y-m-d").".jpg")){
            $count++;
            $niderr="->You have selected ".$_FILES["NIDfile"]["name"];
        }
        else{
            $niderr="->Please choose a jpg file under 25mb";
        }
    }
    else{
        $niderr="->Please choose a jpg file under 25mb";
    }

    $age = $_POST["age"];
    if (!is_numeric($age)) {
        $ageerr = "->Please enter your age";
    } else {
        $count++;
        $ageerr = "-> Your age is " . $age;
    }

    $password = $_POST["password"];
    $verify_password = $_POST["verify_password"];

    if (empty($password) || strlen($password) < 8) {
        $passworderr = "->Please enter a valid password with at least 8 characters";
    } elseif ($password != $verify_password) {
        $verifypassworderr = "->Passwords do not match";
    } else {
        $count++;
        $passworderr = "->Password is valid";
    }

    $data = $_POST["data"];

    if (empty($data)) {
        $dataerr = "->Please select an option";
    } else {
        $count++;
        $dataerr = "->You have selected " . $data;
    }

    if ($count == 9) {
        echo "All fields are valid. Thanks for submitting your information.";
    } else {
        echo "Please check the following errors:<br>";
        echo $firstnameerr . "<br>";
        echo $lastnameerr . "<br>";
        echo $ageerr . "<br>";
        echo $phoneerr . "<br>";
        echo $emailerr . "<br>";
        echo $radioerr . "<br>";
        echo $fileerr . "<br>";
        echo $niderr . "<br>";
        echo $passworderr . "<br>";
        echo $verifypassworderr . "<br>";
        echo $dataerr . "<br>";
    }
}

