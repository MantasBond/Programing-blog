<?php
	include 'includes/header.php';
?>
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
