<?php
	include_once 'dbh.inc.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$ccode = $_POST['ccode'];

	$sql = "INSERT INTO formdatas(name, email, ccode) VALUES ('$name', '$email', '$ccode');";
	mysqli_query($conn, $sql);

	header("Location: ../index.php?signup=succes");
