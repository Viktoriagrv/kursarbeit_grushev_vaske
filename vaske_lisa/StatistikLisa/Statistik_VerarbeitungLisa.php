<!DOCTYPE html>
<html lang="de">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategie und Lernerfolg</title>
</head> 
<body> 
	<?php
	$servername = "localhost";
$username = "m12241-32";
$password = "bZlvguhrx";
$dbname = "m12241_32";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

$sql = "SELECT studierendestrategie.strategieid,strategie.strategie,studierendestrategie.lernid
FROM studierendestrategie WHERE strategieid = 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>LernID</th><th>... Weitere Spaltenköpfe hier ...</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['lernid']) . "</td>";
        // Hier weitere Spalten hinzufügen, entsprechend deiner Tabellenstruktur
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Keine Daten gefunden.";
}

$conn->close();



	?>

</body>
</html>
                   
   
	
