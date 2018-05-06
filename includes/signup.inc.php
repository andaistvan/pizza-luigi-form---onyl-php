<?php
	include_once 'dbh.inc.php';

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ccode = $_POST['ccode'];

		// error handleers
		// check inputs are empty
		if (empty($ccode)) {
			echo 'írj kódot fasz!';
			header("Location: ../index.php?login=empty");
			exit();
		} else {
			$sql = "SELECT * FROM coupons WHERE couponcode='$ccode'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				header("Location: ../index.php?login=error");
				echo 'érvénytelen kód';
				exit();
			} else {
				if ($row = mysqli_fetch_assoc($result)) {
					echo 'kód check '.$row['couponcode'];
					echo ' érvényes kód';
				}
				// save form datas to database
				$sql = "INSERT INTO formdatas(name, email, ccode) VALUES ('$name', '$email', '$ccode');";
				mysqli_query($conn, $sql);
				// save form datas to database
				
				// send email
				$mailTo = "andaistvan@gmail.com"; 
				$headers = "From: ".$email;
				$txt = "Űrlap regsiztráció: ". $name.".\n\n".$email.".\n\n".$ccode;

				mail($mailTo, $headers, $txt);
				header("Location: ../index.php?mailsend");
				// send email
			}
		}
		
		echo '<br>beírt code: '. $ccode. "<br>";
	
	}

	

// validation
// read from coupons
	


