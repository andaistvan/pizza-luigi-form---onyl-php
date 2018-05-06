<?php
	include_once 'dbh.inc.php';

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$ccode = $_POST['ccode'];

		//coupon code compare
		$sql = "SELECT * FROM coupons WHERE couponcode=$ccode;";
		$result = mysqli_query($conn, $sql);

		echo 'beírt code: '. $ccode. "<br>";
		echo 'sql var: '.$sql."<br>";


		
		if ($sql) {
			echo 'fasza';
		} else {
			echo 'nem fasza';
		}

		// echo $sql;
		//teszt
		// echo $name;
		// echo $email;
		// echo $ccode;

		//mail
		// $mailTo = "andaistvan@gmail.com"; 
		// $headers = "From: ".$email;
		// $txt = "Űrlap regsiztráció: ". $name.".\n\n".$email.".\n\n".$ccode;

		// mail($mailTo, $headers, $txt);
		// header("Location: ../index.php?mailsend");
		//mail
	}

	

// validation
// read from coupons
	


