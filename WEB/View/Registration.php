<?php
include "../control/registrationcheck.php";
?>

<html>
<head>
	<title>Registration form</title>
</head>
<body bgcolor="green">
	<br><br><br>
	<center><h1>Registration form</h1></center>
	<center>
		<?php $dataerr = ''; ?>
		<form action="" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<th><b>First Name: </b></th>
					<th><input type="text" name="firstname" size="20"/> <?php if(isset($firstnameerr)) echo $firstnameerr; ?> </th>
				</tr>
				<tr>
					<th><b>Last Name: </b> </th>
					<th><input type="text" name="lastname" size="20"/><?php if(isset($lastnameerr)) echo $lastnameerr; ?>  </th>
				</tr>
				<tr>
					<th><b>Permanent Address: </b></th>
					<th><input type="text" name="address" size="20"/></th>
				</tr>
				<tr>
					<th><b>Phone Number: </b></th>
					<th><input type="text" name="phone" size="20"/><?php if(isset($phoneerr)) echo $phoneerr; ?></th>
				</tr>
				<tr>
					<th><b>Email Address: </b></th>
					<th><input type="text" id="email" name="email" size="20"/> <?php if(isset($emailerr)) echo $emailerr; ?></th>
				</tr>
				<tr>
					<th><b>Gender: </b></th>
					<th>
						<input type="radio" name="gender" value="Male">Male <?php if(isset($radioerr)) echo $radioerr; ?><br>
						<input type="radio" name="gender" value="Female">Female<br>
						<input type="radio" name="gender" value="Other">Other<br>
					</th>
				</tr>
				<tr>
					<th><b>Upload Your CV:</b></th>
					<th><input type="file" name="CVfile" ><?php if(isset($CVerr)) echo $CVerr;?></th>
				</tr>
				<tr>
					<th><b>Upload Your NID Copy:</b></th>
					<th><input type="file" name="NIDfile" ><?php if(isset($niderr)) echo $niderr;?></th>
				</tr>
				<tr>
					<th><b>Password: </b></th>
					<th><input type="password" name="password" size="20"/> <?php if(isset($passworderr)) echo $passworderr;?></th>
				</tr>
				<tr>
					<th><b>Confirm Password: </b></th>
					<th><input type="password" name="confermpassword" size="20"/> <?php if(isset($confermpassworderr)) echo $confermpassworderr;?></th>
				</tr>
				<tr>
					<th></th>
					<th><button type="submit" name="submit" formaction="../Control/registrationcheck.php" >Submit</button></th>
					<th></th>
				</tr>
				<tr>
					<th></th>
					<th><button type="reset" name="reset">Reset</button></th>
				</tr>
			</table>
		</form>
		<?php echo $dataerr; ?>
	</center>
</body>
</html>
