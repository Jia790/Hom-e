<?php include("_header.php"); ?>

<?php
	if(checkAuth(true) != "") {
?>

<body>
	<h1>
		Creating your Profile
	</h1>
	<form action="addUser.php" method="post">
		<fieldset>
			<legend> Personal information:</legend>
			
			First name:<br>
			<input type="text" name="firstname"><br>
			Last name:<br>
			<input type="text" name="lastname"><br>
			Phone &#40;optional&#41;:<br>
			<input type="text" name="phone"><br><br>
			Gender:<br>
				<input type="radio" name="gender" value="male"> Male<br>
				<input type="radio" name="gender" value="female"> Female<br><br>
			Photo &#40;optional&#41;:<br>
			<input type="file" name="photo"><br>
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
                        ONID Username:<br>
                        <input type="text" name="ONID"><br><br>
		</fieldset>
		<fieldset>
			<legend> Connect through Social:</legend>
			<a href="http://www.facebook.com">
				<img src="http://www.inovaeducation.com/sites/all/themes/inovaeducation/images/facebookIcon.png">
			</a>
			
		</fieldset>
	<br>
	<a href="dashboard.php"><input type="submit" value="Submit"></a>
	</form>
	
</body>

<?php } ?>


