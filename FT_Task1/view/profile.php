<?php 
include("navbar.php");
include("../control/profileck.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<table border="0">
			<tr>
				<td colspan="2"><img src="data:image;base64,' . base64_encode($image).'" width=100px; height=100px;></td>
				<td></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
			</tr>
			<tr>
				<td>Date of birth:</td>
				<td><input type="text" name="dob" value="<?php echo $dob; ?>"></td>
			</tr>
			<tr>
				<td>Bio:</td>
				<td><input type="text-area" name="bio"  value="<?php echo $bio; ?>"></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="uname"  value="<?php echo $uname; ?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="pass"  value="<?php echo $pass; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>


	<p>Need any changes edit the label values and press update</p>

</body>
</html>