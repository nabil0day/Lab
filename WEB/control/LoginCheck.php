<?php
 
 setcookie("usercheck","visited",time()+86400);
if(isset($_COOKIE["usercheck"]))
{
    echo"Good to see you again";
}
else{
    echo"Welcome to our site";
}
$error="";
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "Enter Username and Password correctly";

} 

else
{
$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];

   }
 
}

?>
