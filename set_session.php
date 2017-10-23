<?php session_start();
      include '_header.php';
      $_SESSION["ONID"] = $_POST["ONID"];
      echo '<meta http-equiv="refresh" content="0; url=Landing.php" />';
?>
