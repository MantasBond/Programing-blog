<?php
//Changing the password on database with inputs from profile.php
session_start();
include '../dbh.php';

if (isset($_POST['submit'])) {

$oldpwd = preg_replace("/[^A-Za-z0-9]/", "", $_POST['old_pwd']);
$newpwd = preg_replace("/[^A-Za-z0-9]/", "", $_POST['new_pwd']);
$repwd = preg_replace("/[^A-Za-z0-9]/", "", $_POST['re_pwd']);

$sql = "SELECT * FROM user WHERE id=".$_SESSION['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
//$pwd_check = password_verify($oldpwd, $hash_pwd);

$errorEmpty = false;

if (empty($oldpwd || $newpwd || $repwd)) {
	echo "<span class='form-error'>Fill in all fields!</span>";
	$errorEmpty = true;
} else if(!$pwd_check = password_verify($oldpwd, $hash_pwd)) {
	echo "<span class='form-error'>Incorrect password!</span>";
	$errorEmpty = true;
} else if ($newpwd !== $repwd) {
	echo "<span class='form-error'>Password doesnt macth!</span>";
	$errorEmpty = true;
} else {
	$hashing_pwd = password_hash($newpwd, PASSWORD_DEFAULT);
	$sql = "UPDATE user SET pwd='$hashing_pwd' WHERE id=".$_SESSION['id'];
	$result = mysqli_query($conn, $sql);

	echo "<span class='form-success'>Password was succesfuly changed!</span>";
}
}else {
	echo "Not working!";
}
?>
<script>
	$("#old-pwd, #new-pwd, #re-pwd").removeClass( "input-error" )

	var errorEmpty = "<?php echo $errorEmpty; ?>";

	if (errorEmpty == true){
	    $("#old-pwd, #new-pwd, #re-pwd").addClass("input-error");
	}

	if (errorEmpty == false){
	    $("#old-pwd, #new-pwd, #re-pwd").val('');
	}
</script>
