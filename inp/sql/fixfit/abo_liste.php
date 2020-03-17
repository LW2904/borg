<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "fixfit";
$tabelle_abos = "abos";
$tabelle_kunden = "kunden";
$tabelle_abotypen = "abo_typen";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql  = "CREATE TABLE IF NOT EXISTS $tabelle_abos (";
$sql .= "aboID INT NOT NULL AUTO_INCREMENT,";
$sql .= "kundenID INT,";
$sql .= "abotypID INT,";
$sql .= "datum DATE,";
$sql .= "PRIMARY KEY (aboID)";
$sql .= ");";
	
$conn->query($sql) or die($conn->error);

if (isset($_POST["senden"])) {
	
    $kundenID= $_POST["kundenID"]; 
    $abotypID = $_POST["abotypID"]; 
	$datum = $_POST["datum"];

    $sql  = "INSERT INTO $tabelle_abos (kundenID, abotypID, datum) VALUES ('$kundenID', '$abotypID', '$datum')";
	$conn->query($sql) or die ($conn->error);
	
}

$sql  = "SELECT * FROM $tabelle_abos AS a JOIN $tabelle_kunden AS b ON a.kundenID=b.kundenID ";
$sql .= "JOIN $tabelle_abotypen as c ON a.abotypID=c.abotypID ORDER BY aboID ";
$result = $conn->query($sql) or die($conn->error);

if ($result->num_rows > 0) {
	echo "<table>";
	echo "<tr><th>KundenID</th><th>Datum</th><th>Vorname</th><th>Name</th><th>Strasse</th><th>PLZ</th><th>Ort</th><th>Bezeichnung</th><th>Laufzeit</th><th>Preis</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["aboID"]."</td>";
		echo "<td>".$row["datum"]."</td>";
		echo "<td>".$row["vorname"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["strasse"]."</td>";
		echo "<td>".$row["plz"]."</td>";
		echo "<td>".$row["ort"]."</td>";
		echo "<td>".$row["bezeichnung"]."</td>";
		echo "<td>".$row["laufzeit"]." Wochen</td>";
		echo "<td>".$row["preis"]." €</td>";
		echo "</tr>";
	}
	echo "</table>";
} 
// Sonst: Fehlermeldung
else {
	echo "Die Tabelle enthält keine Daten";
}

$conn->close();

?>
