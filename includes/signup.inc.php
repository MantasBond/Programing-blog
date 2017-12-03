<?php
include '../dbh.php';

if (isset($_POST['submit'])) {

//Escape string to prevent SLQ Injections
$first = preg_replace("/[^A-Za-z0-9]/", "", $_POST['first']);
$last = preg_replace("/[^A-Za-z0-9]/", "", $_POST['last']);
$uid = preg_replace("/[^A-Za-z0-9]/", "", $_POST['uid']);
$pwd = preg_replace("/[^A-Za-z0-9]/", "", $_POST['pwd']);
$rpwd = preg_replace("/[^A-Za-z0-9]/", "", $_POST['repwd']);

//Hashing password
$hashing_pwd = password_hash($pwd, PASSWORD_DEFAULT);
//Hashed password check
//$pwd_check = password_verify($rpwd, $hashing_pwd);

$errorEmpty = false;

if (empty($first || $last || $uid || $pwd || $rpwd)) {
	echo "<span class='form-error'>Fill in all fields!</span>";
	$errorEmpty = true;
	//exit();

} else if(!$pwd_check = password_verify($rpwd, $hashing_pwd)) {
	echo "<span class='form-error'>Password doesnt match!</span>";
	$errorEmail = true;
	//exit();

} else {
	$sql="SELECT uid FROM user WHERE uid='$uid'";
	$result= mysqli_query($conn,$sql);
	$uidcheck= mysqli_num_rows($result);

	if($uidcheck > 0) {
		echo "<span class='form-error'>Username already exist!</span>";
		$errorEmail = true;
		//exit();
	} else{
		$sql = "INSERT INTO user (first, last, uid, pwd)
		VALUES ('$first', '$last','$uid', '$hashing_pwd')";
		$result = mysqli_query($conn, $sql);

		echo "<span class='form-success'>Registration Complete!</span>";
	}
}
} else {
	echo "Not working!";
}
?>
<script>
	$("#sign-first, #sign-last, #sign-uid, #sign-pwd, #sign-repwd").removeClass( "input-error" )

	var errorEmpty = "<?php echo $errorEmpty; ?>";

	if (errorEmpty == true){
	    $("#sign-first, #sign-last, #sign-uid, #sign-pwd, #sign-repwd").addClass("input-error");
	}

	if (errorEmpty == false){
	    $("#sign-first, #sign-last, #sign-uid, #sign-pwd, #sign-repwd").val('');
	}
</script>
