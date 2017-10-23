<?php
	ini_set('display_errors', 'On');
	$servername = "oniddb.cws.oregonstate.edu";
	$username = "horvatha-db";
	$password = "4xunHq7hNuAmTgFb";
	$dbName = "horvatha-db";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	// if($finalDB->connect_error){
		// echo "<div>Piess Error:	" . $finalDB->connect_erno . " " .$finalDB->connect_error."<div>";
	// }

    //read the json file contents
    // $jsondata = file_get_contents(data);
    
    //convert json object to php associative array
    // $data = json_decode($jsondata, true);
    
    // $reason = $data['Reason'];
    // $housingType = $data['HousingType'];
    // $roomAmount = $data['roomAmount'];
    // $address = $data['address'];
    // $rent = $data['rent'];
    // $utilCost = $data['utilCost'];
    // $availDate = $data['availDate'];
    // $leaseLength = $data['leaseLength'];
    // $rules = $data['rules'];
    // $userID = $data['userID'];
    
	$query = "INSERT INTO House_T(HouseID, Reason, HousingType, roomAmount, Address, rent, untilCost, availDate, leaseLength, rules, userID) Values(?,?,?,?,?,?,?,?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
	
		$houseId= rand(1000, 5000);
		$reason = $_REQUEST["reason"];
		$housingType = $_REQUEST['housingType'];
		$roomAmount = $_REQUEST['roomAmount'];
		$address = $_REQUEST['address'];
		$rent = $_REQUEST['costMonth'];
		$utilCost = $_REQUEST['costUtil'];
		$availDate = $_REQUEST['availableDate'];
		$leaseLength = $_REQUEST['leaseLength'];
		$rules = $_REQUEST['rules'];
		$userID = rand(2000, 5000);
		
		$statement->bind_param('issisddsssi', $houseId, $reason, $housingType, $roomAmount, $address, $rent, $utilCost, $availDate, $leaseLength, $rules, $userID);
		$statement->execute();
		$statement->close();
		header("Location: dashboard.php");
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
?>