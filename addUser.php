<?php
	ini_set('display_errors', 'On');
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "horvatha-db";
	$password = "4xunHq7hNuAmTgFb";
	$dbName = "horvatha-db";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	$query = "INSERT INTO User_T(UserID, Gender, firstName, lastName, phone, major, age, schYear, relationshipStatus, bio, HouseID, ONID) Values(?,?,?,?,?,?,?,?,?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
	
		$userId= rand(2000, 5000);
		$gender = $_REQUEST["gender"];
		$firstName = $_REQUEST['firstname'];
		$lastName = $_REQUEST['lastname'];
		$phone = $_REQUEST['phone'];
		$major = $_REQUEST['major'];
		$age = $_REQUEST['age'];
		$schYear = $_REQUEST['schYear'];
		$relationshipStatus = $_REQUEST['relations'];
		$bio = $_REQUEST['bio'];
		//$profile = rand(1, 5);
		$houseID = rand(2, 2000);
		$ONID = $_REQUEST['ONID'];
	        
	        //var_dump($statement);	
		$statement->bind_param('isssssssssis', $userId, $gender, $firstName, $lastName, $phone, $major, $age, $schYear, $relationshipStatus, $bio, $houseID, $ONID);
		$statement->execute();
		$statement->close();
		header("Location: dashboard.php");
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
?>
