<!--/* validation*/-->
<!DOCTYPEhtml>
<?php session_start() ?>
<?php
	$error = '';
	
	if(isset($_POST['submit'])){
		
		if(preg_match('/^[0-9]{2,4}$/', $_POST['low'])){
			$_SESSION['low']=$_POST['low'];
		}
		else if (!preg_match('/^[0-9]{2,4}$/', $_POST['low'])){
			$error = "Invalid lower bound";
		}
		if(preg_match('/^[0-9]{3,4}$/', $_POST['max'])){
			$_SESSION['max']=$_POST['max'];
		}
		else if(!preg_match('/^[0-9]{3,4}$/', $_POST['max'])){
			$error = "Invalid upper bound";
		}
		if(preg_match('/^[0-9]{1,4}$/', $_POST['roomAmount'])){
			$_SESSION['roomAmount']=$_POST['roomAmount'];
		}
		else if(!preg_match('/^[0-9]{3,4}$/', $_POST['roomAmount'])){
			$error = "Invalid room number";
		}
		
		$_SESSION['house']=$_POST['housingType'];
		$_SESSION['reason']=$_POST['reason'];
		
	};


?>