<!DOCTYPEhtml>
<?php session_start() ?>
<?php include("_header.php"); 
	  include("searchVal.php");
?>
<html>
<body>

<form method="POST">

		<center>
		
		<h1 style="color:white" align = "center" >Searching for Housing Application</h1>
					<?=$error?>
		<div align = "center">

			<div style = "display: inline-block; text-align: left; ">
			
			<section style = "border: 20px double #000000; padding: 125px; ">
				<b><p style="font-size: 18px" > Type of terms  </p></b>
					<input type="radio" name="reason" value="permanent"> Permanently Vacating 
					<input type="radio" name="reason" value="sublet"> Subletting 
					<input type="radio" name="reason" value="roomAvailable"> Spare Room 
					<br><br>
				<b><p style="font-size: 18px" > Type of housing  </p></b>
					<input type="radio" name="housingType" value="house"> House 
					<input type="radio" name="housingType" value="apartment"> Apartment 
					<input type="radio" name="housingType" value="duplex"> Duplex 
					
			</section><br>
				
				<section style = "border:20px double #000000; padding: 125px;"><br>
				<b style="font-size: 18px">Price Range:</b><br><br> 
							Min : <input type="text" name="low"> Max : <input type="text" name="max"> <br><br>
				<b style="font-size: 18px">Number of Rooms ?</b><br><br>
							<input type="text" name="roomAmount"><br><br>
							
						<input type="submit" name="submit" value = "Submit" >
					
				</section>
			</div>					
			
		</div>
		
		</center>
</form>
<?php 
	if(isset($_POST['submit']) and $error == ''){
	echo '<meta http-equiv="refresh" content="0; url=results.php" />';
	}
?>

<?php
	
	/*database access and pull stuff*/
	/*
	ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);
	if ($result = $conn->query("select Reason,HousingType,roomAmount,Rent from House_T WHERE Reason LIKE '%".$reason."%' WHERE HousingType LIKE '%".$HousingType."%' WHERE roomAmount LIKE '%".$roomAmount."%' WHERE Rent LIKE '%".$low."%' OR Rent LIKE '%".$max."%'")){
		while($obj = $result->fetch_object()){
			echo "<p>".htmlspecialchars($obj->Reason)." ".htmlspecialchars($obj->HousingType)."</p>";
			echo "<p>".htmlspecialchars($obj->Address)."</p>";
			echo "<p>".htmlspecialchars($obj->roomAmount)." rooms</p>";
			echo "<p>$".htmlspecialchars($obj->Rent)." / month</p>";
			echo "<hr>";
			
		}
		
		$result->close();
	}
}
	
*/

/*else{
	echo "<p>Please enter something to search</p>";
	}
	*/
?>

</body>

</html>
