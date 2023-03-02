<?php
session_start();
$error = "";
include('../control/loginCheck.php');
if(isset($_SESSION['username'])){
    header("location: EmployeeHomepage.php");
    exit();
}
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body bgcolor="skyblue">  
        <br><br><br><br><br><br>
        <center>
            <h1>Login</h1>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="username" size="20"/></td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" name="password" size="20"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">Submit</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="reset">Reset</button></td>
                    </tr>
                </table>
            </form>
            <?php echo $error; ?>
        </center>
    </body>
</html>
