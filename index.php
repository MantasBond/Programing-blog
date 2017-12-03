<?php
	include 'includes/header.php';
?>
<div id="login_menu">
	<form id='loginForm' action='includes/login.inc.php' method='POST'>
			<input id='login-uid' type='text' name='uid' placeholder='Username'>
			<input id='login-pwd' type='password' name='pwd' placeholder='Password'>
			<button id='login-submit' type='submit'>LOGIN</button>
			<p class="login-message"></p>
	</form>;
</div>

<div id="reg_menu">
	<form id='signup' action='includes/signup.inc.php' method='POST'>
		<input id="sign-first" type='text' name='first' placeholder='First Name'>
		<input id="sign-last" type='text' name='last' placeholder='Last Name'>
		<input id="sign-uid" type='text' name='uid' placeholder='Username'>
		<input id="sign-pwd" type='password' name='pwd' placeholder='Password'>
		<input id="sign-repwd" type="password" name="repwd" placeholder='Repeat Pasword'>
		<button id="sign-submit" type='submit'>SIGN UP</button>
		<p class="sign-message"></p>
	</form>";
</div>

<div class="content">
	<h1 class="content_title">Title</h1>
	<p class="content_p">Some text</p>
</div>
</body>
</html>
