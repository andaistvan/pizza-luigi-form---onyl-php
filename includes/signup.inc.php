<?php
	include_once 'dbh.inc.php';

	// input fields value to variables
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ccode = $_POST['ccode'];

		// error handleers
		// check inputs are empty
		if (empty($name) || empty($email) || empty($ccode)) {			
			header("Location: ../index.php?signup=empty");
			exit();

		// email validation !!!!

		} else {
			// check copuoncode in database
			$sql = "SELECT * FROM coupons WHERE couponcode='$ccode'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				header("Location: ../index.php?code=error");
				// echo 'érvénytelen kód';
				exit();
			} else {		
				// save form datas to database
				$sql = "INSERT INTO formdatas(name, email, ccode) VALUES ('$name', '$email', '$ccode');";
				mysqli_query($conn, $sql);
								
				// send email
				$mailTo = "andaistvan@gmail.com"; 
				$headers = "From: ".$email;
				$txt = "Űrlap regsiztráció: ". $name.".\n\n".$email.".\n\n".$ccode;
				// admin mail
				mail($mailTo, $headers, $txt);
				header("Location: ../index.php?mailsend");				
			}
		}		
	}