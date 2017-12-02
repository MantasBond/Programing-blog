<?php
	session_start();
	include 'profile.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
</script>
</head>
<body>

<header>
	<nav>
		<ul>
			<?php
				if (isset($_SESSION['id'])) {
					echo "<li id='welcome'>Welcome $name !</li>";
				}
			?>
			<li><a href="index.php">HOME</a></li>
			<?php
				if (isset($_SESSION['id'])) {
					echo "<li><a href='profile.php'>PROFILE</a></li>
						<form action='includes/logout.inc.php'>
							<button>LOG OUT</button>
						</form>";
				} else {
					echo "<form action='includes/login.inc.php' method='POST'>
							<input type='text' name='uid' placeholder='Username'>
							<input type='password' name='pwd' placeholder='Password'>
							<button type='submit'>LOGIN</button>
						</form>";
						echo "<li><a href='signup.php'>SIGNUP</a></li>";
				}
			?>
		</ul>
	</nav>
</header>

<?php
	$url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
