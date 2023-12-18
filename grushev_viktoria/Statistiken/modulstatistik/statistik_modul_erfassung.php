<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Hier musst du deine Datenbankverbindung einrichten
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen der Verbindung
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// SQL-Abfrage, um Modul-Daten zu erhalten
$sql = "SELECT modul.modul_id, modul.modulname, COUNT(lerndaten.modul_id) as anzahl 
FROM modul
LEFT JOIN lerndaten ON modul.modul_id = lerndaten.modul_id
GROUP BY modul.modul_id
";

$result = $conn->query($sql);

// Daten in ein assoziatives Array konvertieren
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// JSON zurückgeben
echo json_encode($data);

// Verbindung schließen
$conn->close();
?>
