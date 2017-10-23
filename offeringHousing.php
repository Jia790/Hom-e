<?php
	include("_header.php");
	include("addHouseValidation.php");
?>

<html>
<head>
	<title>Offer Housing</title>

</head>
<body>
	<div>
		<h1>Offer Housing</h1>
		<p>This form will create your housing ad. Please fill it out to the best of your ability so the best people can be matched.</p>
		
		<?=$error?>
		
		<form method="post" class="inform">
			<label>Why are you posting the ad?<br></label>
				<input type="radio" name="reason" value="permanent"> Permanently Vacating <br>
				<input type="radio" name="reason" value="sublet"> Subletting <br>
				<input type="radio" name="reason" value="roomAvailable"> Spare Room <br>
			<label>What property type?<br></label>
				<input type="radio" name="housingType" value="house"> House <br>
				<input type="radio" name="housingType" value="apartment"> Apartment <br>
				<input type="radio" name="housingType" value="duplex"> Duplex <br>
			<label>Number of rooms available?</label>
				<input type="text" name="roomAmount"><br>
			<label>Address?</label>
				<input type="text" name="address"><br>
			<label>Rent cost per month?</label>
				<input type="text" name="costMonth"><br>
			<label>Utility cost per month?</label>
				<input type="text" name="costUtil"><br>
			<label>Available move in date?</label>
				<input type="text" name="availableDate"><br>
			<label>Length of lease?</label>
				<input type="text" name="leaseLength"><br>
			<label>Any rules associated with the property?</label><br>
				<textarea name="rules" rows="10" cols="30">
					Put rules here
				</textarea>
				<br>
			
			<input type="submit" name = "submit" value = "Submit">
		</form>
	
	</div>

	<?php
		// If the post was submitted and $error is still blank (an error was not detected)
		if (isset($_POST['submit']) and $error == '') {
			// Include the 'addHouse' code
			include 'addHouse.php';
			echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		}
	?>

</body>

</html>