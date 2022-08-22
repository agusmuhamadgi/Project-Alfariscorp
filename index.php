<?php
	session_start();
	if(empty($_SESSION['username'])){
		header("Location: login.php");
	}

	echo "Wellcome".$_SESSION['username'];
?>
<br/><br/><br/>
<a href="logout.php">Logout</a>