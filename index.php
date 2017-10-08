<?php
	include 'includes/header.php';
?>
<div id="content">
<?php
	if(strpos($url,'error=login')!==false){
		echo "<p class='message'>Username/Password incorrect!</p>";
	} else if(isset($_SESSION['id'])){
	} else {
		echo "<p class='message'>You are not logged in!</p>";
	}
?>
</div>
</body>
</html>
