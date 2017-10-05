<?php
//Changing the password on database with inputs from profile.php
session_start();
include '../dbh.php';

$oldpwd = $_POST['opwd'];
$newpwd = $_POST['npwd'];
$repwd = $_POST['rpwd'];

$sql = "SELECT * FROM user WHERE id=".$_SESSION['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$pwd_check = password_verify($oldpwd, $hash_pwd);

if (empty($oldpwd & $newpwd & $repwd)) {
	header("Location: ../profile.php?error=empty");
	exit();
} else if($pwd_check == 0) {
	header("Location: ../profile.php?error=password");
	exit();
} else if ($newpwd !== $repwd) {
	header("Location: ../profile.php?error=repassword");
	exit();
} else {
	$hashing_pwd = password_hash($newpwd, PASSWORD_DEFAULT);
	$sql = "UPDATE user SET pwd='$hashing_pwd' WHERE id=".$_SESSION['id'];#
	$result = mysqli_query($conn, $sql);

	header("Location: ../profile.php?success");
}
?>
