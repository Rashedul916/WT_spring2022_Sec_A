<?php
$fname = $email = $phone = $age = $speciality = $uname = $pass = $bio = "";
$fname_error = $email_error = $phone_error = $age_error = $speciality_error = $bio_error = $uname_error = $pass_error = $file_error = "";
$has_error = "";
if (isset($_POST["submit"])) {
	# code...
	$fname = $_POST["fname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$age = $_POST["age"];
	$uname = $_POST["uname"];
	$pass = $_POST["pass"];

	if (empty($fname)) {
		# code...
		$fname_error = "Invalid name.";
	}
	else {
		$has_error = 0;
	}
	if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
		# code...
		$email_error = "Invalid email format.";
	}
	else {
		$has_error = 0;
	}
	if (empty($phone) || strlen($phone) < 11) {
		# code...
		$phone_error = "Invalid format.";
	}
	else {
		$has_error = 0;
	}
	if (empty($age) || $age < 0) {
		# code...
		$age_error = "Invalid age.";
	}
	else {
		$has_error = 0;
	}
	if (empty($speciality)) {
		# code...
		$speciality_error = "Select at least one.";
	}
	else {
		$speciality = $_POST["speciality"];
		$has_error = 0;
	}
	if (empty($uname)) {
		# code...
		$uname_error = "Invalid username.";
	}
	else {
		$has_error = 0;
	}
	if (empty($pass) || strlen($pass) < 8) {
		# code...
		$pass_error = "Invalid password.";
	}
	else {
		$has_error = 0;
	}

	
	if (empty($bio)) {
		# code...
		$bio_error = "Please write something about you.";
	}
	else {
		$has_error = 0;
	}

	// if($_FILES["file"]["type"] == "jpg") {
	// 	if ($_FILES['file']['size'] > 2*MB) {
		
	// 		if(move_uploaded_file($_FILES["file"]["tmp_name"], "../files/". $_FILES["file"]["tmp_name"])) {
	// 			$file_error = "File is uploaded";
	// 			echo $_FILES["file"]["name"];
	// 			$has_error = 0;

	// 		}
	// 		else {
	// 			$file_error = "You must upload a file";
	// 		}
	// 	}
	// 	else {
	// 		$file_error = "File must be less then 2 MB!!!";
	// 	}
	// }
	// else {
	// 	$file_error =  "File must be in .jpg formate.";
	// }

	if (move_uploaded_file($_FILES["file"]["tmp_name"], "../Files/". "$uname.jpg")) {
		# code...

		if ($_FILES["file"]["type"] == "jpg") {
			# code...
			
			if ($_FILES['file']['size'] < 10*MB) {
				# code...

				$has_error = 0;
			}
			else {
				$file_error = "Invalid images formate.";
			}
		}
		else {
			$file_error = "Invalid images formate.";
		}
	}
	else {
		$file_error = "Invalid images formate.";
	}


}
if ($has_error == 0) {
	# code...

	// store varified values in json files for further use

	   $formdata = array(
	      'fname'=> $_POST["fname"],
	      'email'=> $_POST["email"],
	      'phone'=>$_POST["phone"],
	      'age'=> $_POST["age"],
	      'speciality' => $_POST['speciality'],
	      'bio' => $_POST['bio'],
	      'uname' => $_POST['uname'],
	      'pass' => $_POST['pass'],
	      // 'file' => $_POST['']
	   );
       $existingdata = file_get_contents('../Json/data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   // if(file_put_contents("../Json/data.json", $jsondata)) {
	   //      echo "Data successfully saved <br>";
	   //  }
	   // else 
	   //      echo "no data saved";

  //    $data = file_get_contents("data.json");
	 // $mydata = json_decode($data);

    
	 // echo "my value: ".$mydata[1]->lastName;







	header("location: ../view/Log in.php");
}
?>