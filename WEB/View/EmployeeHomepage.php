<?php
session_start();
if (empty($_SESSION["username"])) {
   header("Location: ../control/login.php"); 
}

?>
<!DOCTYPE html>
<html>
<title>  EmployeeHomepage </title>

<body bgcolor="pink">  
<center><h1>Welcome Back</h1> </center>
        <center> <a href="view_profile.php">View Profile</a><br></center>
        <br><br><br>
        <center> <a href="update_guides_data.php">Update Data of Guides</a><br></center>
        <br><br><br>
        <center><a href="update_customer_data.php">Update Data of Customer</a><br></center>
        <br><br><br>
        <center><a href="tourist_guide.php">Tourist Guide</a><br></center><br>
        <center>  <a href="../control/logout.php">
         <h2><i>Logout</h2></i></a><center>
</body>

</html>
