<style>
#header {
    background-color:#6AC6AF;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:600px;
    width:100px;
    float:left;
    padding:5px;
}
#section {
    width:950px;
    height:600px;
    float:left;
    padding:10px;
}
#footer {
    background-color:#6AC6AF;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
</style>
<!--colors?
darker teal #6AC6AF
tealish#BADFC0
greyish teal#A7BFB1
-->

<!--<body background="">
-->
<?php session_start();
      include("_header.php"); ?>
<?php
	//if(checkAuth(true) != "") {
?>

<body bgcolor="#F7A810">
<h1 style="float: center;">Welcome to Hom-E</h1>


<div id="logIn" style="float: center;">
	<form method="post" action="set_session.php">
	    Please enter your ONID username: <input type="text" name="ONID"><br>
	    <input type="submit">
        </form>
	<button><a style="color: black;" href="profileCreation.php">Sign Up Using OSU Account</a></button>
	<button><a style="color: black;" href="dashboard.php">Log In</a></button>
</div>



</body>

