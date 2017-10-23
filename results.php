<?php 
	session_start();
	include("_header.php");
 ?>
<html>
<head>
	<title>Results</title>
	<style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
	  #map {height: 68%; width: 58%}
    </style>

</head>
<body>
	<h3>Here are the houses which match your search. You can now go hunt down the house. In the future you will be able to contact the poster of the house but for right now this page is still under construction. </h3>
	<div id="map"></div>
	<script type="text/javascript">
		//Code adapted from Google API example
		var map;
		var geocoder;
		function initMap() {
			geocoder = new google.maps.Geocoder();
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 44.5647222, lng: -123.2608333},
				zoom: 13,
				 styles: [{
				  featureType: 'poi',
				  stylers: [{ visibility: 'off' }]  // Turn off points of interest.
				}, {
				  featureType: 'transit.station',
				  stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
				}],
				disableDoubleClickZoom: true
			});
		} 
		var req = new XMLHttpRequest();
		req.onload = function(){
			var addresses = JSON.parse(req.responseText);
			var i = 0;
			for(i=0; i<addresses.length; i+=1){
				geocoder.geocode({'address':addresses[i].addr}, function(results, status) {
				if (status === google.maps.GeocoderStatus.OK) {
				  var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				  });
				} else {
				  alert('Geocode was not successful for the following reason: ' + status);
				}
				});
			}	
		};
			
		req.open("get", "serverSideResults.php", true);
		req.send();
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkSZC-s7UaaBYVPmvMC_F7CPuHzZ7SQIU&callback=initMap">
    </script>
	
<div id="searchData" >
	<h1>Housing data</h1>

		<?php
				ini_set('display_errors', 'On');
				$servername = "oniddb.cws.oregonstate.edu";
				$username = "horvatha-db";
				$password = "4xunHq7hNuAmTgFb";
				$dbName = "horvatha-db";
				$conn = new mysqli($servername, $username, $password, $dbName);
				$reason = $_SESSION['reason'];
				$houseType = $_SESSION['house'];
				$roomAmount = $_SESSION['roomAmount'];
				$low = $_SESSION['low'];
				$max = $_SESSION['max'];
				/*var_dump($low)*/;
				if ($result = $conn->query("select Reason,HousingType,roomAmount,Rent,Address,availDate from House_T WHERE Reason='$reason' AND HousingType='$houseType' AND roomAmount='$roomAmount' AND Rent Between'$low' AND '$max'")){
					while($obj = $result->fetch_object()){ 
						
							echo "<p> Vacancy: ".htmlspecialchars($obj->Reason)."</p>";
							echo "<p> Housing Type: ".htmlspecialchars($obj->HousingType)."</p>";
							echo "<p>".htmlspecialchars($obj->Address)."</p>";
							echo "<p>".htmlspecialchars($obj->roomAmount)." rooms</p>";
							echo "<p>$".htmlspecialchars($obj->Rent)." / month</p>";
							echo "<p> Date Available : ".htmlspecialchars($obj->availDate)." </p>";
							echo "<hr>";
					} 

					$result->close();
				}
				else{
					echo "<p>Sorry no result match your search.</p>";
				}
				echo "</table>"; 


		?>
</data>



<?php include '_footer.php' ?>

</body>
</html>
