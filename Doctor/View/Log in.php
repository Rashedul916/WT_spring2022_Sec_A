<?php
// session_start();
include "../Control/Log in check.php";
// if(isset($_SESSION['uname']) && isset($_SESSION['pass'])){
		// 		header("location: ../view/home.php");
	// 	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Log in[Doctor]</title>
	</head>
	<body background="../images/background.jpg">
		<center>
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
			<!-- <form action="../control/log in check.php" method="post"> -->
			<fieldset>
				<table cellpadding="10">
					<tr>
						<td colspan="2" align="center">
							<font size="6">
							Log In
							</font>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td>
							<input type="text" name="uname" placeholder="Enter Usrname">
							<font color="red"> * </font>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>
							<input type="password" name="pass" placeholder="Enter password">
							<font color="red"> * </font>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
						<td><input type="reset" name="reset"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<font color="red"> * <?php echo $error; ?></font>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">Have no account <a href="Create account.php">Create account</a></td>
						<td></td>
					</tr>
				</table>
			</fieldset>
		</form>
		</center>
	</body>
</html>