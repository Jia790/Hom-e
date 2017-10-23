<?php

    // found on stackoverflow at http://stackoverflow.com/questions/4356289/php-random-string-generator

    function generateRandomString($length = 10) {
        $characters = ' 0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	            $randomString .= $characters[rand(0, $charactersLength - 1)];
		     }
	    return $randomString;
    }
    $servername = "oniddb.cws.oregonstate.edu";
    $username = "horvatha-db";
    $password = "4xunHq7hNuAmTgFb";
    $dbName = "horvatha-db";
    $finalDB = new mysqli($servername, $username, $password, $dbName);
    $reasonArray = ["permanent", "sublet"];
    $houseArray = ["house", "apartment"];
    $query = "INSERT INTO House_T(HouseID, Reason, HousingType, roomAmount, Address, rent, untilCost, availDate, leaseLength, rules, userID) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    if($statement = $finalDB->prepare($query)){
        for($i = 0; $i < 1000; $i++){
            $houseID = rand(4, 2000);
	    $reason = $reasonArray[rand()%2];
            $house = $houseArray[rand()%2];
	    $roomAmount = rand(1,5);
	    $address = generateRandomString(12);
	    $rent = rand(350, 850);
	    $untilCost = rand(0, 25);
	    $availDate = "06/15/2018";
	    $leaseLength = "25 months";
	    $rules = generateRandomString(30);
	    $userID = rand(4, 1000);
    
            $statement->bind_param('issisddsssi',$houseID, $reason, $house, $roomAmount, $address, $rent, $untilCost, $availDate, $leaseLength, $rules, $userID);
	    $statement->execute();
	}
	$statement->close();
    }

?>
