<?php
if (isset($_GET["site"])) $site = $_GET["site"].".php";
else $site="home.php";
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bildungsinstitut</title>
	 <link rel="stylesheet" href="css/styles.css" type="text/css">

</head>
<body>
	<header>
		<img src="images/banner.png" class="logo">

		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?site=auswahl_buchungen">Buchungen</a></li>
				<li><a href="index.php?site=buchung_erfassen">Neue Buchung</a></li>
				<li><a href="index.php?site=bewertung_erfassen">Bewertung</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<?php include $site?>
	</main>
</body>
</html>