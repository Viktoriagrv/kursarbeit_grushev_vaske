<?php
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

// Überprüfen, ob das Formular abgeschickt wurde
if(isset($_POST['gesendet'])) {
    // Sicherstellen, dass die modul_id gesetzt ist und eine gültige Zahl ist
    if(isset($_POST['modul_id']) && is_numeric($_POST['modul_id'])) {
        $modul_id = $_POST['modul_id'];

        // SQL-Abfrage, um den Aufwand für das ausgewählte Modul abzurufen
        $sql = "SELECT modul.modulname, aufwand.aufwand 
                FROM aufwand 
                INNER JOIN modul ON aufwand.modul_id = modul.modul_id 
                WHERE aufwand.modul_id = $modul_id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Daten aus der Datenbank ausgeben
            while($row = $result->fetch_assoc()) {
                echo "Modul: " . $row['modulname'] . ", Aufwand: " . $row['aufwand'] . "<br>";
            }
        } else {
            echo "Keine Daten gefunden.";
        }
    } else {
        echo "Ungültige Modul-ID.";
    }
}

// Verbindung schließen
$conn->close();
?>

