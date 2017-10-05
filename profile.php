<?php
include 'includes/header.php';
echo "<h class='heading'>Profile</h>";
echo "<table id='profile'>
		<tr>
			<th>First Name:</th>
			<th>$name</th>
		</tr>
		<tr>
			<th>Last Name:</th>
			<th>$last_name</th>
		</tr>
		<tr>
			<th>Username:</th>
			<th>$username</th>
		</tr>
	</table>";
echo "<h class='heading'>Change Password</h>";

	if(strpos($url,'error=empty')!==false){
		echo "<p class='message'>Fill out all fields!</p>";
} else if(strpos($url,'error=password')!==false){
		echo "<p class='message'>Password incorrect</p>";
} else if(strpos($url,'error=repassword')!==false){
		echo "<p class='message'>New password doesn't macth!</p>";
} else if(strpos($url,'success')!==false){
		echo "<p class='message'>Password succesfully changed!</p>";
}
echo "<form id='newpwd' action='includes/cpwd.inc.php' method='POST'>
		<input type='password' name='opwd' placeholder='Old Password'>
		<input type='password' name='npwd' placeholder='New Password'>
		<input type='password' name='rpwd' placeholder='Reapeat Pasword'>
		<button type='submit'>SUBMIT</button>
	</form>";
?>