<?php include '_header.php' ?>

<h1>Housing data</h1>

<?php
ini_set('display_errors', 'On');
$servername = "oniddb.cws.oregonstate.edu";
$username = "horvatha-db";
$password = "4xunHq7hNuAmTgFb";
$dbName = "horvatha-db";
$conn = new mysqli($servername, $username, $password, $dbName);

echo "<table class='housing'><tr><th>Reason<th>HousingType<th>RoomAmount<th>Address<th>Rent<th>Until.Cost<th>AvailDate<th>LeaseLenght<th>Rules</tr>";
if ($result = $conn->query("select Reason,HousingType,roomAmount,Address,Rent,untilCost,availDate,leaseLength,rules from House_T")) {
    while($obj = $result->fetch_object()){ 
            echo "<tr>";
            echo "<td>".htmlspecialchars($obj->Reason)."</td>"; 
            echo "<td>".htmlspecialchars($obj->HousingType)."</td>"; 
            echo "<td>".htmlspecialchars($obj->roomAmount)."</td>"; 
            echo "<td>".htmlspecialchars($obj->Address)."</td>"; 
            echo "<td>".htmlspecialchars($obj->Rent)."</td>"; 
			echo "<td>".htmlspecialchars($obj->untilCost)."</td>"; 
			echo "<td>".htmlspecialchars($obj->availDate)."</td>"; 
			echo "<td>".htmlspecialchars($obj->leaseLength)."</td>"; 
			echo "<td>".htmlspecialchars($obj->rules)."</td>"; 
            echo "</tr>";
    } 

    $result->close();
}
echo "</table>"; 


?>



<?php include '_footer.php' ?>