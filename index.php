<?php
	include 'includes/header.php';
?>
<div id="login_menu">
	<form action='includes/login.inc.php' method='POST'>
			<input type='text' name='uid' placeholder='Username'>
			<input type='password' name='pwd' placeholder='Password'>
			<button type='submit'>LOGIN</button>
	</form>;
</div>

<div id="reg_menu">
	<form id='signup' action='includes/signup.inc.php' method='POST'>
		<input type='text' name='first' placeholder='First Name'>
		<input type='text' name='last' placeholder='Last Name'>
		<input type='text' name='uid' placeholder='Username'>
		<input type='password' name='pwd' placeholder='Password'>
		<input type="password" name="repwd" placeholder='Repeat Pasword'>
		<button type='submit'>SIGN UP</button>
	</form>";
</div>

<div id="error">
<?php
	if(strpos($url,'error=login')!==false){
		echo "<p class='message'>Username/Password incorrect!</p>";
	}

	if(isset($_SESSION['id'])){
	} else {
		echo "<p class='message'>You are not logged in!</p>";
	}
?>
</div>
<div class="content">
	<h1 class="content_title">Title</h1>
	<p class="content_p">Some text</p>
</div>
</body>
</html>
