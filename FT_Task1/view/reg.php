<?php
include "../control/regck.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
	</head>
	<body>
		<center>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td colspan="2" align="center"><font size="6">Registration Form</font></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="email" name="email" placeholder="someone@gmail.com"></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="tel" name="phone" pattern="[0-9]{5}-[0-9]{6}" placeholder="Formate: 013xx-xxxxxx"></td>
					</tr>
					<tr>
						<td>DOB:</td>
						<td><input type="date" name="dob"></td>
					</tr>
					<tr>
						<td>Add bio:</td>
						<td><textarea name="bio" placeholder="Write something about you"></textarea></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" placeholder="Avoid white space"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="8 or more digit"></td>
					</tr>
					<tr>
						<td>Image:</td>
						<td><input type="file" name="image"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
						<td><input type="reset" name="reset"> <?php echo $error ?></td>
					</tr>
					<tr>
						<td colspan="2" align="center">Have account<a href="login.php">Signin</a></td>
						<td></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>