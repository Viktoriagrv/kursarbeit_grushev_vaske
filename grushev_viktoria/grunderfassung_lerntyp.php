<?php

// Fehlermeldung
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank herstellen
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

// Das gleiche wie bei grunderfassung modul!
$query = "SELECT lerntyp_id, lerntyp FROM lerntyp";
$result = $con->query($query);

if ($result) {

    while ($row = $result->fetch_assoc()) {
        $lerntyp_id = $row['lerntyp_id'];
        $lerntyp = $row['lerntyp'];
        
		
        echo "<option value='$lerntyp_id'>$lerntyp</option>";
    }

    
    $result->free();
} else {
    echo "Error retrieving modul data: " . $con->error;
}

$con->close();

?>