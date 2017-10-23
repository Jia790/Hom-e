<?php
	// This variables is displayed at the top of the profileCreation page
	$error = '';

	// If the profileCreation post has been submitted
	if (isset($_POST['submit'])) {

		// Variables from posted information
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$phone = $_POST['phone'];
		$major = $_POST['major'];
		$age = $_POST['age'];
		$year = $_POST['schYear'];
		$bio = $_POST['bio'];
		$onid = $_POST['ONID'];
		
		// Regular expressions for comparison
		$phoneRegEx = '/^[0-9]{10,11}$/';
		$majorRegEx = '/^[a-zA-Z ]{2,30}$/';
		$ageRegEx = '/^[0-9]{1,3}$/';
		$yearRegEx = '/^[0-9]+$/';
		$bioRegEx = '/^[a-zA-Z0-9!?() ]{0,300}$/';
		
		// Check each variable and set the error message accordingly
		if (!ctype_alpha($firstName)) {
			$error = 'Invalid first name';
		}
		else if (!ctype_alpha($lastName)) {
			$error = 'Invalid last name';
		}
		else if (!preg_match($phoneRegEx, $phone) and $phone != "") {
			$error = 'Invalid phone number';
		}
		else if (!preg_match($majorRegEx, $major)) {
			$error = 'Invalid major';
		}
		else if (!preg_match($ageRegEx, $age)) {
			$error = 'Invalid age';
		}
		else if (!preg_match($yearRegEx, $year)) {
			$error = 'Invalid year in school';
		}
		else if (!preg_match($bioRegEx, $bio)) {
			$error = 'Invalid biography';
		}
		else if (!ctype_alnum($onid)) {
			$error = 'Invalid ONID username';
		}
	}
?>


















