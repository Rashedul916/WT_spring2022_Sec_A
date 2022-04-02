<?php

include "../model/model.php";

$error = "";

if(isset($_POST['submit']))
{
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['dob']) || empty($_POST['bio']) || empty($_POST['uname']) || empty($_POST['pass']) || empty($_FILES["image"]["name"]))
	{
		$error = 'You can not left a field empty';
	}
	else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email']))
	{
		$error = 'Email formate not match';
	}
	else if(strlen($_POST['pass']) < 8)
	{
		$error = 'Password must equal or above 8 digit';
	}
	else if(preg_match('/\s/', $_POST['uname']))
	{
		$error = 'Username not contains whitespace';
	}
	else
	{

		$fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg');
        if(in_array($fileType, $allowTypes))
        { 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));

			$dbobj = new db();
			$conobj = $dbobj->open();

			$dbobj->registration( $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['dob'], $_POST['bio'], $_POST['uname'], $_POST['pass'], 'imgContent', "doctor", $conobj);

			$dbobj->close($conobj);

			header("location: ../view/login.php");


        }
        else
        { 
            $error = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.'; 
        }
	}
}

?>