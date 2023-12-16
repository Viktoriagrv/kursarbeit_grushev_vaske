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

if (isset($_POST["gesendet"])) {
    // Wurde das Formular gesendet
    $benutzer = $_POST['benutzer'];
    $modul = $_POST['modul'];    $lerntyp = $_POST['lerntyp'];
    $inspiration = $_POST['inspiration'];

    // Query
    $insert_query = "INSERT INTO lerndaten (benutzer_id, modul_id, lerntyp_id, inspiration_id) VALUES ('$benutzer', '$modul', '$lerntyp', '$inspiration')";


    if (mysqli_query($con, $insert_query)) {
        echo "Erfolgreich in Datenbank hinzugefügt";
    } else {
        echo "Fehler beim Einfügen " . $insert_query . "<br>" . mysqli_error($con);
    }
}

?>

