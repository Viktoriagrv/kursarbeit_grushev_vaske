<?php

// Fehlermeldung
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank herstellen mit meinen Daten
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

// Verbindung wird erstellt
$con = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($con->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con->connect_error);
}

// Modul wählen, Modulname von Modul
$query = "SELECT modul_id, modulname FROM modul";
$result = $con->query($query);

// Erfolgreich
if ($result) {
    // Array
    while ($row = $result->fetch_assoc()) {
        $modul_id = $row['modul_id'];
        $modulname = $row['modulname'];
        // Output
        echo "<option value='$modul_id'>$modulname</option>";
    }

    // Ergebnis
    $result->free();
} else {
    echo "Error retrieving modul data: " . $con->error;
}

// Datenbank Verbindung schließen
$con->close();

?>