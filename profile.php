<?php
include 'includes/header.php';
?>

<h class='heading'>Profile</h>
<?php
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
?>
<h class='heading'>Change Password</h>

<form id='newpwd' action='includes/cpwd.inc.php' method='POST'>
		<input id='old-pwd' type='password' name='opwd' placeholder='Old Password'>
		<input id='new-pwd' type='password' name='npwd' placeholder='New Password'>
		<input id='re-pwd' type='password' name='rpwd' placeholder='Repeat Pasword'>
		<button id='newpwd-submit' type='submit'>SUBMIT</button>
		<p class="newpwd-message"></p>
</form>


</body>
</html>
