<?php
include('../control/loginCheck.php');
if(isset($_SESSION['username'])){
    header("location: EmployeeHomepage.php");
    exit();
}
?>
<html>
    <head>

    </head>
    <body bgcolor="skyblue">  
        <title>Login</title>
        <br><br><br><br><br><br>
        <center><h1>Login</h1></center>
        <center>
            <table>
                <form action="" method="post">

                    <tr>
                        <th>User Name: </th>
                        <th><input type="text" name="username" size="20"/> </th>
                    </tr>
                    <tr>
                        <th><b>Password: </b></th>
                        <th><input type="password" name="password" size="20"/> </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><button type="submit" name="submit">Submit</button></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><button type="reset">Reset</button></th>
                        <th></th>
                    </tr>
                </form>
            </table>
        </center>
        <?php 
            echo $error; 
         ?>
    </body>
</html>
