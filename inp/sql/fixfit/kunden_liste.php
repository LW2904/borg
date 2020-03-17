<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "fixfit";
$tabelle_kunden = "kunden";

//Mit der Datenbank verbinden	
$db = new mysqli($servername, $db_username, $db_password, $db_name);
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

//Tabelle anlegen, falls sie noich nicht existiert
$sql  = "CREATE TABLE IF NOT EXISTS $tabelle_kunden (";
$sql .= "kundenID INT NOT NULL AUTO_INCREMENT,";
$sql .= "vorname VARCHAR(50),";
$sql .= "name VARCHAR(50),";
$sql .= "strasse VARCHAR(50),";
$sql .= "plz VARCHAR(50),";
$sql .= "ort VARCHAR(50),";
$sql .= "PRIMARY KEY (kundenID)";
$sql .= ");";
	
$db->query($sql) or die($db->error);

//Falls Daten gesendet wurden
if (isset($_POST["senden"])) {
	
	//Daten übernhemen
    $name= $_POST["name"]; 
    $vorname = $_POST["vorname"]; 
	$strasse = $_POST["strasse"];
	$plz = $_POST["plz"];
	$ort = $_POST["ort"];
	
	//Daten speichern
    $sql  = "INSERT INTO $tabelle_kunden (vorname, name, strasse, plz, ort) VALUES ('$vorname', '$name', '$strasse', '$plz', '$ort')";
	$db->query($sql) or die ($db->error);
	
}

//Daten für die Tabellenanzeige abfragen
$sql  = "SELECT * FROM $tabelle_kunden ORDER BY name,vorname";
$result = $db->query($sql) or die($db->error);

//Falls Daten vorhanden
if ($result->num_rows > 0) {
	
	//Daten als Tabelle anzeigen
	echo "<table>";
	echo "<tr><th>KundenID</th><th>Vorname</th><th>Name</th><th>Strasse</th><th>PLZ</th><th>Ort</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["kundenID"]."</td>";
		echo "<td>".$row["vorname"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["strasse"]."</td>";
		echo "<td>".$row["plz"]."</td>";
		echo "<td>".$row["ort"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
} 

//Sonst: Kein Daten vorhanden
else {
	echo "Bisher sind keine Kundendaten vorhanden";
}

//Datenbankverbindung schließen
$db->close();

?>
