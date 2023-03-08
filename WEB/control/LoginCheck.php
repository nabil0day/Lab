<?php


if(isset($_COOKIE["usercheck"]))
{
    echo "Good to see you again";
}
else{
    setcookie("usercheck","visited",time()+86400);
    echo "Welcome to our site";
}

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Please enter username and password";
    } else {
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        header("Location: EmployeeHomepage.php");
        exit;
    }
}
?>


