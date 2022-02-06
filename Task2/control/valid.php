<?php

$fname = $lname = $age = $email = $pass = $designation = "";
$l1 = $l2 = $l3 = "";

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
	if (empty($age)) {
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

	if (!isset($_POST["Planguage_1"]) && !isset($_POST["Planguage_2"]) && !isset($_POST["Planguage_3"])) {
		# code...
		echo "Please selecet at least one checkbox <br>";
	}
	else {
		if (isset($_POST["Planguage_1"])) {
			# code...
			$l_1 = $_POST["Planguage_1"];
			// echo "You select " . $l_1 . "<br>";
		}
		if (isset($_POST["Planguage_2"])) {
			# code...
			$l_2 = $_POST["Planguage_2"];
			// echo "You select " . $l_2 . "<br>";
		}
		if (isset($_POST["Planguage_3"])) {
			# code...
			$l_3 = $_POST["Planguage_3"];
			// echo "You select " . $l_3 . "<br>";
		}
	}
	echo "You select " . $l_1 . "<br>";
	echo "You select " . $l_2 . "<br>";
	echo "You select " . $l_3 . "<br>";

	$email = $_POST["email"];
	if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
	{
	    echo "you must enter email<br>";
	}
	else{
		
	    echo "your email is ". $email . "<br>";
	}

	$pass = $_POST["pass"];
	if(empty($pass) || strlen($pass) < 8) {
		echo "Enter a valid password <br>";
	}
	else {
		
		echo "Your password is " . $pass . "<br>";
	}



}

?>