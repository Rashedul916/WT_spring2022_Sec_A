<?php
define('MB', 1048576);

$fname = "";
$lname = "";
$age = "";
$email = "";
$pass = "";
$designation = "";
$planguage_1 = "";
$planguage_2 = "";
$planguage_3 = "";
// $myfile = "";

if (isset($_POST["submit"])) {
	# code...
	$fname = $_POST["fname"];
	if (empty($fname)) {
		# code...
		echo "Enter a valid first name.<br>";
	}
	else {
		echo "Your first name is " . $fname . "<br>";
	}

	$lname = $_POST["lname"];
	if (empty($lname)) {
		# code...
		echo "Enter a valid last name.<br>";
	}
	else {
		echo "Your last name is " . $lname . "<br>";
	}

	$age = $_POST["age"];
	if (empty($age) || $age < 0) {
		# code...
		echo "Enter a valid age.<br>";
	}
	else {
		echo "Your age is " . $age . "<br>";
	}

	if (isset($_POST["designation"])) {
		# code...
		$designation = $_POST["designation"];
		echo "You select " . $designation . "<br>";
	}
	else {
		echo "Select at least one radio button.<br>";
	}

	if (!isset($_POST["planguage_1"]) && !isset($_POST["planguage_2"]) && !isset($_POST["planguage_3"])) {
		# code...
		echo "Please selecet at least one checkbox <br>";
	}
	else {
		if (isset($_POST["planguage_1"])) {
			# code...
			$planguage_1 = $_POST["planguage_1"];
			echo "You select " . $planguage_1 . "<br>";
		}
		if (isset($_POST["planguage_2"])) {
			# code...
			$planguage_2 = $_POST["planguage_2"];
			echo "You select " . $planguage_2 . "<br>";
		}
		if (isset($_POST["planguage_3"])) {
			# code...
			$planguage_3 = $_POST["planguage_3"];
			echo "You select " . $planguage_3 . "<br>";
		}
	}

	$email = $_POST["email"];
	if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
	{
	    echo "You must enter email<br>";
	}
	else{
		
	    echo "Your email is ". $email . "<br>";
	}

	$pass = $_POST["pass"];
	if(empty($pass) || strlen($pass) < 8) {
		echo "Enter a valid password <br>";
	}
	else {
		
		echo "Your password is " . $pass . "<br>";
	}


	// echo "Your first name is " . $fname . "<br>";

	// $myfile = $_POST["myfile"];


	if($_FILES["file"]["type"] == "jpg") {
		if ($_FILES['file']['size'] > 2*MB) {
		
			if(move_uploaded_file($_FILES["file"]["tmp_name"], "../files/". "abc.jpg")) {
				echo "File is uploaded";
				echo $_FILES["file"]["name"];

			}
			else {
				echo "You must upload a file";
			}
		}
		else {
			echo "File must be less then 2 MB!!!";
		}
	}
	else {
		echo "File must be in .jpg formate.";
	}
	



}

?>