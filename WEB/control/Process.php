<?php
$firstnameerr = $lastnameerr = $ageerr = $phoneerr =  $radioerr = "";
$emailerr = $fileerr = $niderr =  $dataerr = $passworderr = $verifypassworderr= "";
$count = 0;
setcookie("visit","1",time());

if (isset($_POST["Submit"])) {

    $firstname = $_POST["firstname"];

    if (empty($firstname) || strlen($firstname) < 2) {

        $firstnameerr = "->Please enter a valid a name";
    } elseif(is_numeric("firstname")){
        $firstnameerr = "->Name can't be any number";
    }

    else {
        $count++;
        $firstnameerr = "->Your first name is " . $firstname;
    }

    $lastname = $_POST["lastname"];

    if (empty($lastname)) {

        $lastnameerr = "->Please enter a valid a name";
    } elseif(is_numeric("lastname")){
        $lastnameerr = "->Name can't be any number";
    }
    else {
        $count++;
        $lastnameerr = "->Your last name is " . $lastname;
    }

     $address = $_POST["address"];

    if (empty($address)) {

        $addresserr = "->Please enter a valid address";
    } elseif(is_numeric("address")){
        $addresserr = "->Aaddress can't be any number";
    }
    else {
        $count++;
        $addresserr = "->Your address is " . $address;
    }
     
    $phone = $_POST["phone"];
    if (!is_numeric("$phone")) {

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
                $fileerr="->You have selected ".$_FILES["NIDfile"]["name"];
                
            }
            else{
                $fileerr="->Please choose a jpg file under 25mb";
            }
            }
            else{
                $fileerr="->Please choose a jpg file under 25mb";
            }

            $password = $_POST["password"];

     if (!empty($password) || strlen($password)> 8) {
        $count++;
      
    } else {
       
        $passworderr = "->Please enter a password upto 8 letter,character and number";
       
     }
     $confermpassword = $_POST["confermpassword"];

     if ($password == $confermpassword && $password !="" ) {

       $cnfermpassworderr = "->Password set successfully ";
       $count++;
    } else {
        
        $confermpassworderr = "-> Password do not matched";
       
     }

     if ($count != 10){
        $dataerr= "Please fill up all the information";
     }

     else if ($count == 10) {
     $formdata = array(
    'First Name           :' => $firstname,
    'Last  Name           :' => $lastname,
    'Permanent Address    :' => $address,
    'Phone Number         :' => $phone,
    'Email                :' => $email,
    'Gender               :' => $gender,
    'Upload Your CV       :' => $CVfile,
    'Upload Your NID Copy :' => $NIDfile,
    'Password             :' => $password


     );
     $existingdata = file_get_contents('../Data/Data.json'); 
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] = $formdata;
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     if (file_put_contents("../Data/Data.json", $jsondata)) {
        $dataerr = "Data successfully saved ";
     } else {
        $dataerr = "No data saved";
     }
 
    
 }

}
?>
