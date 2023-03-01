<?php
session_start();
if (empty($_SESSION["username"])) {
   header("Location: ../control/login.php"); 
}

?>
<!DOCTYPE html>
<html>
<title>
            EmployeeHomepage
        </title>

<body bgcolor="pink">  
<center><h1>Welcome Back</h1> </center>
        <center> <button type="button">View Profile</button><br></center>
        <br><br><br>
        <center> <button type="button">Update Data of Guides</button><br></center>
        <br><br><br>
        <center><button type="button">Update Data of Customer</button><br></center>
        <br><br><br>
        <center><button type="button">Tourist Guide</button><br></center><br>
        <center>  <a href="../control/logout.php">
         <h2><i>Logout</h2></i></a><center>
</body>

</html>