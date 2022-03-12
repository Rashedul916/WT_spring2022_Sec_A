<?php
session_start();
include "Navbar.php";
$data = file_get_contents("../json/data.json");
$mydata = json_decode($data);
for($i = 0; $i<= count($mydata)-1; $i++) {
	if($mydata[$i]->uname == $_SESSION['uname'] && $mydata[$i]->pass == $_SESSION['pass']) {
		$in = $i;
		// echo $mydata[$in]->fname;
		// echo $in;
		// exit();
	}
}
// ehco $in;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Profile</title>
	</head>
	<body background="../images/background.jpg">
		<center>
		<table bgcolor="#e6f7ff" cellpadding="10", width="50%", border="0">
			<tr>
				<td colspan="3" align="center"> <h1>★━━━━━━━━━━Hi <?php echo $_SESSION["uname"]; ?>━━━━━━━━━━★ </h1></td>
			</tr>
			<tr>
				<td rowspan="4"><img src="../files/<?php echo $_SESSION["uname"]; ?>.jpg" width="200px" height="200px" align="center"></td>
				<td>Full name: </td>
				<td> <?php echo $mydata[$in]->fname; ?> </td>
			</tr>
			<tr>
				<td>Email: </td>
				<td> <?php echo $mydata[$in]->email; ?> </td>
			</tr>
			<tr>
				<td>phone: </td>
				<td> <?php echo $mydata[$in]->phone; ?> </td>
			</tr>
			<tr>
				<td>Age: </td>
				<td> <?php echo $mydata[$in]->age; ?> </td>
			</tr>
			<tr>
				<td rowspan="3" align="justify"> <?php echo $mydata[$in]->bio; ?> </td>
				<td>Speciality: </td>
				<td> <?php echo $mydata[$in]->speciality; ?> </td>
			</tr>
			<tr>
				<td>Username: </td>
				<td> <?php echo $mydata[$in]->uname; ?> </td>
			</tr>
			<tr>
				<td>Password: </td>
				<td> <?php echo $mydata[$in]->pass; ?> </td>
			</tr>
		</table>
		</center>
	</body>
</html>