<?php 

//session_start();

$in = 0;

$data = file_get_contents("../json/data.json");
$mydata = json_decode($data);

for($i = 0; $i<= count($mydata)-1; $i++) {


	if($mydata[$i]->uname == $_SESSION['uname'] && $mydata[$i]->pass == $_SESSION['pass']) {

		$in = $i;
		// echo $mydata[$in]->fname;
		// echo $in;
		exit();
	}
}

// ehco $in;




?>