<?php
session_start(); 

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

<html>
<head>
    <title>Login form</title>
</head>
<body>
    <form action="" method="post">
        <?php if (!empty($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
