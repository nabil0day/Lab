<?php
session_start();

$error = "";

if (isset($_POST['submit'])) {
  // check for empty fields
  if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['password']) || empty($_POST['confermpassword'])) {
    $error = "All fields are required!";
  } else {
    // validate first name
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST['firstname'])) {
      $error = "Invalid first name format!";
    }
    // validate last name
    else if (!preg_match("/^[a-zA-Z ]*$/", $_POST['lastname'])) {
      $error = "Invalid last name format!";
    }
    // validate phone number
    else if (!preg_match("/^[0-9]*$/", $_POST['phone'])) {
      $error = "Invalid phone number format!";
    }
    // validate email
    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $error = "Invalid email format!";
    }
    // validate password
    else if ($_POST['password'] != $_POST['confermpassword']) {
      $error = "Passwords do not match!";
    } else {
      // validation successful, store data in session
      $_SESSION['registration_data'] = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'gender' => $_POST['gender'],
        'password' => $_POST['password']
      );
      header("Location: '../View/login.php'");
      exit();
    }
  }
}
?>

