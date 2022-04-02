<?php

include "../control/loginck.php";
?>


<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
	</head>
	<body>
		<center>
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td colspan="2" align="center"><font size="6">Log In</font></td>
						<td></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" placeholder="Enter Usrname" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
						<td><input type="reset" name="reset"></td>
						<td><input type="checkbox" name="remember">Remember me</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><?php echo $error; ?></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2" align="center">No account <a href="reg.php">Signup</a></td>
						<td></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>