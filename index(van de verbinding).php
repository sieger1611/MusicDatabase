<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>000webhost en boeken</title>
	<?php include 'verbinding.php'; ?>
</head>
<body>
<form action="zoekafhandeling.php" method="POST">
	<input type="text" name="zoeken" placeholder="zoeken">
	<button type="submit" name="submit">zoekknop</button>
</form>
<p>PS. de zoekknop werkt nog niet</p>
<h1>Kies Muziek uit deze tabel:</h1>
<?php
	$sqlquery = "SELECT * FROM Muziek";
	$resultaat = mysqli_query($verbinding, $sqlquery);
	$queryResultaat = mysqli_num_rows($resultaat);
	if ($queryResultaat > 0) {
		while ($row = mysqli_fetch_assoc($resultaat)) {
				echo "<p><b>".$row['Titel_id']."</b></p>";
				echo "<p>".$row['Artiest']."</p>";
				echo "<p>".$row['Titel']."</p>";
				echo "<p>".$row['Album']."</p>";
				echo "<p>".$row['Genre']."</p>";
				echo "<br>";
		}
	 } else { 
		echo "er is iets mis gegaan";
	}
?>
</body>
</html>
				