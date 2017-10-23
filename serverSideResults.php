<?php
session_start();
header('Content-type: application/json;charset=UTF-8');
ini_set('display_errors', 'On');
$servername = "oniddb.cws.oregonstate.edu";
$username = "horvatha-db";
$password = "4xunHq7hNuAmTgFb";
$dbName = "horvatha-db";
$conn = new mysqli($servername, $username, $password, $dbName);
$array = array();
$reason = $_SESSION['reason'];
$houseType = $_SESSION['house'];
$roomAmount = $_SESSION['roomAmount'];
$low = $_SESSION['low'];
$max = $_SESSION['max'];

if ($result = $conn->query("select Address from House_T where  Reason='$reason' AND HousingType='$houseType' AND roomAmount='$roomAmount' AND Rent Between'$low' AND '$max'" )) {
	
	while($obj = $result->fetch_object()){ 
			$temp = array(
				"addr" => $obj->Address
			);
			array_push($array, $temp);
	}
} 
	echo json_encode($array);
$result->close();

?>


