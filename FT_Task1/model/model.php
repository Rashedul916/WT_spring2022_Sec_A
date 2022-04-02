<?php

class db
{
	function open()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hms";

		$con = new mysqli($servername, $username, $password, $dbname);

		return $con;

	}

	function registration($name, $email, $phone, $dob, $bio, $uname, $pass, $image, $tname, $con)
	{
		$sql = "insert into $tname (name, email, phone, dob, bio, uname, pass, image) values ('$name', '$email', '$phone', '$dob', '$bio', '$uname', '$pass', '$image')";
		$con->query($sql);
	}

	function login($uname, $pass, $tname, $con)
	{
		
		$sql = "select * from $tname where uname = '$uname' and pass = '$pass' ";
		$result = $con->query($sql);
		return $result;
	}

	function close($con)
	{
		$con->close();
	}

	function profile($con, $tname, $uname, $pass)
	{
		$sql = "select * from $tname where uname = '$uname' and pass = '$pass'";
		$result = $con->query($sql);
		return $result;
	}

	function upprof($name, $email, $phone, $dob, $bio, $uname, $pass, $tname, $con)
	{
		$sql = "update $tname set name = '$name', email = '$email', phone = '$phone', dob = '$dob', bio = '$bio', uname = '$uname', pass = '$pass' where uname = '$uname' and pass = '$pass'";
		$con->query($sql);
	}

}


?>