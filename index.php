<?php 
	include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TV kupon</title>
</head>
<body>

<?php 
	$sql = "SELECT * FROM coupons;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['couponcode']. "<br>";
		}
	}

 ?>

</body>
</html>