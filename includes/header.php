<?php
	session_start();
	include 'profile.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="style6.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/dropdown_menu.js"></script>
<script src="js/sign_up_val.js"></script>
<script src="js/login_val.js"></script>
<script src="js/profile_val.js"></script>
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
					echo "<li><button class='menu_btn' id='log_btn'>LOGIN</button></li>";
					echo "<li><button class='menu_btn' id='sign_btn'>SIGNUP</button></li>";
				}
			?>
		</ul>
	</nav>
</header>

<?php
	$url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
