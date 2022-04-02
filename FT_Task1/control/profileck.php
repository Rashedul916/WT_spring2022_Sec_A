<?php
session_start();

$msg = $msg2 = "";
$name = $email = $phone=$dob=$bio=$uname=$pass=$image="";

include "../model/model.php";

$dbobj = new db();
$conobj = $dbobj->open();
$info = $dbobj->profile($conobj, 'doctor', $_SESSION['username'], $_SESSION['password']);
if($info->num_rows > 0)
{
	$row = $info->fetch_assoc();
	$msg = "result found.";
	$name = $row['name']; 
	$email = $row['email'];
	$phone= $row['phone'];
	$dob= $row['dob'];
	$bio= $row['bio'];
	$uname= $row['uname'];
	$pass= $row['pass'];
	$image = $row['image'];
}
else{
	$msg = "result dosen't fount";
}


if(isset($_POST['update']))
{
	
	$row = $info->fetch_assoc();

	$dbobj->upprof($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['dob'], $_POST['bio'], $_POST['uname'], $_POST['pass'],'doctor', $conobj);

	header("location: ../view/login.php");
	
}

$dbobj->close($conobj);


?>


