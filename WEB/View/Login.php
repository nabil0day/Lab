<?php
include('../control/loginCheck.php');
if(isset($_SESSION['username'])){
header("location: EmployeeHomepage.php");
}
?>
<html>
    <head>

    </head>
    <body bgcolor="skyblue">  
        <title>
        Login
        </title><br><br><br><br><br><br>
        <center><h1>Login</h1> </center>
        <center>
            <table>
            <form action="" method="post">

        <tr>
            <th>User Name: </th>
            <th><input type="text" name="username" size="20"/> </th>
        <tr>
        <tr>
            <th><b>Password: </b></th>
            <th><input type="password" name="password" size="20"/> </th>
        <tr>
        
        <tr>
            <th></th>
            <th><button>Submit</button></th>
            <th></th>
            
        <tr>
        <tr>
            <th></th>
            <th><button>Reset</button></th>
            <th></th>
            
        <tr>
        </form>
        <?php 
        echo $error; 
         ?>
             

        </table>
        </center>
        
       
    </body>
</html>