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
    $lernziel = $_POST['lernziel'];
    $aufgabe = $_POST['aufgabe'];
    $inspiration = $_POST['inspiration'];
    $lerntyp_id = $_POST['lerntyp_id'];
    $modul_id = $_POST['modul_id'];
	$aufwand_id = $_POST['aufwand_id'];
	$semester_id = $_POST['semester_id'];

    // Query
    $insert_query = "INSERT INTO lerndaten (lernziel, aufgabe, inspiration, lerntyp_id, modul_id, aufwand_id, semester_id) 
                     VALUES ('$lernziel', '$aufgabe', '$inspiration', '$lerntyp_id', '$modul_id', '$aufwand_id', '$semester_id')";

    if (mysqli_query($con, $insert_query)) {
        echo "Erfolgreich in Datenbank hinzugefügt";
    } else {
        echo "Fehler beim Einfügen " . $insert_query . "<br>" . mysqli_error($con);
    }
}

?>

