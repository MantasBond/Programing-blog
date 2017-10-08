<?php
include '../dbh.php';

//Escape string to prevent SLQ Injections
$first = mysqli_real_escape_string($_POST['first']);
$last = mysqli_real_escape_string($_POST['last']);
$uid = mysqli_real_escape_string($_POST['uid']);
$pwd = mysqli_real_escape_string($_POST['pwd']);
$rpwd = mysqli_real_escape_string($_POST['repwd']);

//Hashing password
$hashing_pwd = password_hash($pwd, PASSWORD_DEFAULT);
//Hashed password check
$pwd_check = password_verify($rpwd, $hashing_pwd);

if (empty($first & $last & $uid & $pwd & $rpwd)) {
	header("Location: ../signup.php?error=empty");
	exit();
} else if($pwd_check == 0) {
	header("Location: ../signup.php?error=password");
	exit();
} else {
	$sql="SELECT uid FROM user WHERE uid='$uid'";
	$result= mysqli_query($conn,$sql);
	$uidcheck= mysqli_num_rows($result);

	if($uidcheck > 0) {
		header("Location: ../signup.php?error=username");
		exit();
	} else{
		$sql = "INSERT INTO user (first, last, uid, pwd)
		VALUES ('$first', '$last','$uid', '$hashing_pwd')";
		$result = mysqli_query($conn, $sql);

		header("Location: ../index.php");
	}
}

?>
