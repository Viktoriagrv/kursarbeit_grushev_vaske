<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul und Aufwand</title>
</head>
<body>

<?php
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verbindung zur Datenbank herstellen (nehmen Sie Ihre eigenen Daten)
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen der Verbindung
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// Sicherstellen, dass die modul_id gesetzt ist und eine gültige Zahl ist
if (isset($_POST['modul_id']) && is_numeric($_POST['modul_id'])) {
    $modul_id = $_POST['modul_id'];

    // Definieren und Initialisieren von $aufwand_id
    $aufwand_id = 1;  // Hier musst du den tatsächlichen Wert für aufwand_id einsetzen, wenn es einen Standardwert gibt

// SQL-Abfrage, um den Aufwand für das ausgewählte Modul abzurufen
$sql = "SELECT lerndaten.modul_id, modul.modulname, lerndaten.aufwand_id, aufwand.aufwand 
        FROM lerndaten 
        INNER JOIN modul ON lerndaten.modul_id = modul.modul_id 
        INNER JOIN aufwand ON lerndaten.aufwand_id = aufwand.aufwand_id 
        WHERE lerndaten.modul_id = ?";

// Prepared Statement verwenden, um SQL Injection zu verhindern
$stmt = $conn->prepare($sql);

// Fehlerbehandlung für das Prepared Statement
if (!$stmt) {
    die("Error in statement preparation: " . $conn->error);
}

// Parameter an bind_param übergeben
$stmt->bind_param("i", $modul_id);
        // Query ausführen
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Daten aus der Datenbank ausgeben
                while ($row = $result->fetch_assoc()) {
                    // Ausgabe in einem Textfeld
                    echo '<textarea rows="4" cols="50">';
                    echo "Modul: " . htmlspecialchars($row['modulname']) . ", Aufwand: " . htmlspecialchars($row['aufwand']);
                    echo '</textarea>';
                }
            } else {
                echo "Keine Daten gefunden.";
            }
        } else {
            die("Error in statement execution: " . $stmt->error);
        }

        // Prepared Statement schließen
        $stmt->close();
    } else {
        echo "Ungültige Modul-ID.";
    }


// Verbindung schließen
$conn->close();
?>