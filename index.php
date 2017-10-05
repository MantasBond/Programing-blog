<?php
	include 'includes/header.php';
?>

<?php
	if(strpos($url,'error=login')!==false){
		echo "<p class='message'>Username/Password incorrect!</p>";
	} else if(isset($_SESSION['id'])){
	} else {
		echo "<p class='message'>You are not logged in!</p>";
	}
?>
</body>
</html>