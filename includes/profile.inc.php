<?php
include 'dbh.php';

if (isset($_SESSION['id'])) {
	$sql = "SELECT * FROM user WHERE id=".$_SESSION['id'];
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$name = $row['first'];
	$last_name = $row['last'];
	$username = $row['uid'];
}
?>