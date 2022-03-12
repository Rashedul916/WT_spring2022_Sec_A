<?php
session_start();
// $uname = $pass = "";
$error = "required";
if (isset($_POST['submit'])) {
	if (empty($_POST['uname']) || empty($_POST['pass'])) {
		$error = "Username or password is invalid, try again";
	}
	
	else
	{
		$_SESSION["uname"] = $_POST['uname'];
		$_SESSION["pass"] = $_POST['pass'];
		$data = file_get_contents("../json/data.json");
		$mydata = json_decode($data);
		for($i = 0; $i<= count($mydata)-1; $i++) {
			if($mydata[$i]->uname == $_POST['uname'] && $mydata[$i]->pass == $_POST['pass']) {
				header("location: ../view/home.php");
				exit();
			}
		}
	}
	
}
?>