<?php
	include("_header.php");
	include("addUserValidation.php");
?>

<?php
	if(checkAuth(true) != "") {
?>

<body>
	<h1>
		Creating your Profile
	</h1>
	
	<?=$error?>
	
	<form method="post">
		<fieldset>
			<legend> Personal information:</legend>
			
			First name:<br>
			<input type="text" name="firstname"><br>
			<script> isValid($firstName, $nameRegEx) </script>
			Last name:<br>
			<input type="text" name="lastname"><br>
			Phone &#40;optional&#41;:<br>
			<input type="text" name="phone"><br><br>
			Gender:<br>
				<input type="radio" name="gender" value="male"> Male<br>
				<input type="radio" name="gender" value="female"> Female<br><br>
			Major:<br>
			<input type="text" name="major"><br>
			Age:<br>
			<input type="text" name="age"><br>
			Year in school:<br>
			<input type="text" name="schYear"><br>
			Relationship Status:<br>
				<input type="radio" name="relations" value="single"> Single<br>
				<input type="radio" name="relations" value="dating"> In a Relationship<br>
				<input type="radio" name="relations" value="prefNotTo"> Prefer not to say<br>
				<img src="http://www.bizfilings.com/images/QuestionMrk.gif" title="Living conditions can change when you have a partner! Let your potential roommates know!"><br><br>
			Description/Bio:<br>
			<textarea name="bio" rows="6" cols="35">
			</textarea> 
                        <br>ONID Username:<br>
                        <input type="text" name="ONID"><br><br>
		</fieldset>
		<fieldset>
			<legend> Connect through Social:</legend>
			<a href="http://www.facebook.com">
				<img src="http://www.inovaeducation.com/sites/all/themes/inovaeducation/images/facebookIcon.png">
			</a>
			
		</fieldset>
	<br>
	<input type="submit" name = "submit" value="Submit">
	</form>
	
	<?php
		// If the post was submitted and $error is still blank (an error was not detected)
		if (isset($_POST['submit']) and $error == '') {
			// Include the 'addUser' code
			include 'addUser.php';
			echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		}
	?>
	
</body>

<?php } ?>


