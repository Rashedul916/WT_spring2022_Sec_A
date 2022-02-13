<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Registration Form</h1>
	<hr>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname"><br></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="number" name="age"><br></td>
			</tr>
			<tr>
				<td>Designation:</td>
				<td>
					<input type="radio" name="designation" value="Junior Programmer">Junior Programmer
					<input type="radio" name="designation" value="Senior Programmer">Senior Programmer
					<input type="radio" name="designation" value="Project Lead">Project Lead
				</td>
			</tr>
			<tr>
				<td>Preferred Language</td>
				<td>
					<input type="checkbox" name="planguage_1" value="Java">Java
					<input type="checkbox" name="planguage_2" value="PHP">PHP
					<input type="checkbox" name="planguage_3" value="C++">C++
				</td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email"><br></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td>Please choose a file</td>
				<td><input type="file" name="file"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
					<input type="reset" name="reset" id="">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	
</body>
</html>

<?php

include "../control/valid.php";

?>