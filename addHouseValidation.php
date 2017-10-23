<?php
	// This variables is displayed at the top of the profileCreation page
	$error = '';

	// If the profileCreation post has been submitted
	if (isset($_POST['submit'])) {

		// Variables from posted information
		$roomAmount = $_POST['roomAmount'];
		$address = $_POST['address'];
		$costMonth = $_POST['costMonth'];
		$costUtil = $_POST['costUtil'];
		$availableDate = $_POST['availableDate'];
		$leaseLength = $_POST['leaseLength'];
		$rules = $_POST['rules'];
		
		// Regular expressions for comparison
		$addressRegEx = '/^[a-zA-Z0-9 ]{2,50}$/';
		$roomAmountRegEx = '/^[0-9]{1,2}$/';
		$rulesRegEx = '/^[a-zA-Z0-9!? ]{1,300}$/';
		$costsRegEx = '/^[0-9]{1,5}$/';
		$dateRegEx = '/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/';
		$leaseLengthRegEx = '/^[0-9]{1,3}$/';
		
		// Check each variable and set the error message accordingly
		if (!preg_match($roomAmountRegEx, $roomAmount)) {
			$error = 'Invalid number of rooms';
		}
		else if (!preg_match($addressRegEx, $address)) {
			$error = 'Invalid address';
		}
		else if (!preg_match($costsRegEx, $costMonth)) {
			$error = 'Invalid rent cost';
		}
		else if (!preg_match($costsRegEx, $costUtil)) {
			$error = 'Invalid utility cost';
		}
		else if (!preg_match($dateRegEx, $availableDate)) {
			$error = 'Invalid move in date';
		}
		else if (!preg_match($leaseLengthRegEx, $leaseLength)) {
			$error = 'Invalid lease length';
		}
		else if (!preg_match($rulesRegEx, $rules)) {
			$error = 'Invalid property rules';
		}
	}
?>


















