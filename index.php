<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TV kupon</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<main>
		<form class="contact-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="name" placeholder="név">
			<br>
			<input type="text" name="email" placeholder="e-mail">
			<br>
			<input type="text" name="ccode" placeholder="kupon kód">
			<br>
			<button type="submit" name="submit">Submit</button>
		</form>

		<?php
			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			if (strpos($fullUrl, "signup=empty") == true) {
				echo "<p class='error'>Minden mezőt kötelező kitölteni!</p>";
			}
			else if (strpos($fullUrl, "code=error") == true) {
				echo "<p class='error'>Hibás kód!</p>";
			}
			elseif (strpos($fullUrl, "mailsend") == true) {
				echo "<p class='error'>Email sikeresen elküldve</p>";
			}
		?>

	</main>
</body>
</html>