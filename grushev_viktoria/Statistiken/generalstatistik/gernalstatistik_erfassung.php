<?php
// Datenbankverbindung herstellen (ersetze diese Werte mit deinen tatsächlichen Daten)
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen der Verbindung
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// Funktion zur Ausführung einer SQL-Abfrage und Rückgabe der Ergebnisse als assoziatives Array
function executeQuery($conn, $sql) {
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return array();
    }
}

// SQL-Abfragen für jede Tabelle ausführen (ersetze dies durch die tatsächlichen Spaltennamen)
$modulQuery = "SELECT COUNT(*) as modulCount FROM modul";
$lerntypQuery = "SELECT COUNT(*) as lerntypCount FROM lerntyp";
$semesterQuery = "SELECT COUNT(*) as semesterCount FROM semester";
$aufwandQuery = "SELECT COUNT(*) as aufwandCount FROM aufwand";

// Statistikdaten abrufen
$modulData = executeQuery($conn, $modulQuery);
$lerntypData = executeQuery($conn, $lerntypQuery);
$semesterData = executeQuery($conn, $semesterQuery);
$aufwandData = executeQuery($conn, $aufwandQuery);

// Verbindung schließen
$conn->close();

// JSON-Antwort erstellen
$response = array(
    'modulCount' => $modulData['modulCount'],
    'lerntypCount' => $lerntypData['lerntypCount'],
    'semesterCount' => $semesterData['semesterCount'],
    'aufwandCount' => $aufwandData['aufwandCount']
);

// JSON-Header setzen
header('Content-Type: application/json');

// JSON-Antwort ausgeben
echo json_encode($response);
?>

