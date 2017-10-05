<?php
session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$pwd_check = password_verify($pwd, $hash_pwd);

if($pwd_check == 0) {
	header("Location: ../index.php?error=login");
	exit();
} else {
	$sql = "SELECT * FROM user WHERE uid ='$uid' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn, $sql);
	$logincheck = mysqli_num_rows($result);

	if (!$row = mysqli_fetch_assoc($result)) {
		header("Location: ../index.php?error=login");
		exit();
	} else {
		$_SESSION['id'] = $row['id'];
		header("Location: ../index.php");
	}
}
?>