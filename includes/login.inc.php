<?php
session_start();
include '../dbh.php';

if (isset($_POST['submit'])) {

$uid = preg_replace("/[^A-Za-z0-9]/", "", $_POST['uid']);
$pwd = preg_replace("/[^A-Za-z0-9]/", "", $_POST['pwd']);

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
//$pwd_check = password_verify($pwd, $hash_pwd);

if($pwd_check = password_verify($pwd, $hash_pwd)) {
	echo "<span class='form-error'>Username/Password incorrect!</span>";
	//exit();
} else {
	$sql = "SELECT * FROM user WHERE uid ='$uid' AND pwd='$hash_pwd'";
	$result = mysqli_query($conn, $sql);
	$logincheck = mysqli_num_rows($result);

	if (!$row = mysqli_fetch_assoc($result)) {
		echo "<span class='form-error'>Username/Password incorrect!</span>";
		//exit();
	} else {
		$_SESSION['id'] = $row['id'];
		echo "<script type='text/javascript'>  window.location='index.php'; </script>";
	}
}
} else {
	echo "Not working!";
}
?>
<script>
	$("#login-uid, #login-pwd").removeClass( "input-error" )

	var errorEmpty = "<?php echo $errorEmpty; ?>";

	if (errorEmpty == true){
	    $("#login-uid, #login-pwd").addClass("input-error");
	}

	if (errorEmpty == false){
	    $("#login-uid, #login-pwd").val('');
	}
</script>
