<?php
include "../Control/Create account check.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Create account[Doctor]</title>
	</head>
	<body background="../images/background.jpg">
		<center>
		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<table cellpadding="10">
					<tr>
						<td colspan="2" align="center">
							<font size="6">
							Sign up
							</font>
						</td>
					</tr>
					<tr>
						<td>Full name:</td>
						<td>
							<input type="text" name="fname" placeholder="Enter full name">
							<font color="red"> * <?php echo $fname_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>
							<input type="email" name="email" placeholder="Enter valid email">
							<font color="red"> * <?php echo $email_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td>
							<input type="text" name="phone" placeholder="Enter phone">
							<font color="red"> * <?php echo $phone_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Age:</td>
						<td>
							<input type="number" name="age" placeholder="Enter age">
							<font color="red"> * <?php echo $age_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Speciality:</td>
						<td>
							<input type="radio" name="speciality" value="Medicine"		>Medicine
							<input type="radio" name="speciality" value="Dental"		>Dental
							<input type="radio" name="speciality" value="Orthopaedics"	>Orthopaedics
							<input type="radio" name="speciality" value="Eye Specialist">Eye Specialist
							<input type="radio" name="speciality" value="Neurology"		>Neurology
							<input type="radio" name="speciality" value="Nephrology"	>Nephrology
							<br>
							<font color="red"> * <?php echo $speciality_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Add bio:</td>
						<td>
							<textarea name="bio" placeholder="Write something about you"></textarea>
							<font color="red"> * <?php echo $bio_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td>
							<input type="text" name="uname" placeholder="Chose a Username">
							<font color="red"> * <?php echo $uname_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>
							<input type="password" name="pass" placeholder="Set a password">
							<font color="red"> * <?php echo $pass_error; ?></font>
						</td>
					</tr>
					<tr>
						<td>Upload your image:</td>
						<td>
							<input type="file" name="file">
							<br>
							<font color="green">
								Chose a image in range 10 MB & .jpg formate <br>
							</font>
							<font color="red"> * <?php echo $file_error; ?></font>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
						<td><input type="reset" name="reset"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">Already have a account <a href="Log in.php">Log in</a></td>
						<td></td>
					</tr>
				</table>
			</fieldset>
		</form>
		</center>
	</body>
</html>