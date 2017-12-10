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
<script src="js/logout_btn.js"></script>
<script src="js/buttons.js"></script>
<script src="js/post_form.js"></script>
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
			<li><button class="menu_btn" id="home_btn">HOME</button></li>
			<?php
				if (isset($_SESSION['id'])) {
					echo "<li><button class='menu_btn' id='profile_btn'>PROFILE</button></li>";
					echo	"<li><button class='menu_btn' id='logout_btn'>LOG OUT</button></li>";
				} else {
					echo "<li id='active_btn1'><button class='menu_btn' id='log_btn'>LOGIN</button></li>";
					echo "<li id='active_btn2'><button class='menu_btn' id='sign_btn'>SIGNUP</button></li>";
				}
			?>
		</ul>
	</nav>
</header>

<?php
	$url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
