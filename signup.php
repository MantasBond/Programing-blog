<?php
	include 'includes/header.php';
?>

<?php
	if(strpos($url,'error=empty')!==false){
		echo "<p class='message'>Fill out all fields!</p>";
	} else if(strpos($url,'error=username')!==false){
		echo "<p class='message'>Username already exsits!</p>";
	} else if(strpos($url,'error=password')!==false) {
		echo "<p class='message'>Password doesnt macth!</p>";
	}
	?>
<form id='signup' action='includes/signup.inc.php' method='POST'>
	<input type='text' name='first' placeholder='First Name'>
	<input type='text' name='last' placeholder='Last Name'>
	<input type='text' name='uid' placeholder='Username'>
	<input type='password' name='pwd' placeholder='Password'>
	<input type="password" name="repwd" placeholder='Repeat Pasword'>
	<button type='submit'>SIGN UP</button>
</form>";
</body>
</html>
