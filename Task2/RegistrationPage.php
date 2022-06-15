<?php   include "Control/validation.php" ; ?>

<!DOCTYPE html>
<html>
<head>
<title>Registration  </title>

</head>
<body>
<table>

<h1> Registration Form<h1>
<form action="" method="post" enctype= "multipart/form-data">
    
<td> Username : </td>
<td><input type="text" name="username"> <?php echo $username; ?>  </td>

<tr>
<td> First Name : </td>
<td><input type="text" name="fname"> <?php echo $fName; ?>  </td>
</tr>

<td> Last Name : </td>
<td><input type="text" name="lname"> <?php echo $lName; ?>  </td>
</tr>

<td> Address : </td>
<td><input type="text" name="address"> <?php echo $address; ?>  </td>

</tr>
<tr>
<td> Email :  </td>
<td><input type="text" name="email"> <?php echo $validateemail; ?> </td>
</tr>

<tr>
<td>Password :  </td>
<td><input type="password" name="password"><?php echo $validatepassword; ?></td>
</tr>

<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"name= "fileupload"><?php echo $validfile?></td>
</tr>



<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>
</tr>

</form>
</table>

</body>
</html>