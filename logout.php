<?php include '_header.php' ?>

<center><h1 style =" color: black; font-size: 30pt; font-weight: bold;">You are logged out.</h1><center>

<?php

$_SESSION["onidid"] ="";
unset($_SESSION["onidid"]);

if (session_destroy()){	
	echo '<meta http-equiv="refresh" content="0; url=Landing.php" />';
}

?>

<?php include '_footer.php' ?>
