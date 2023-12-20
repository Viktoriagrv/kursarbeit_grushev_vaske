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
	
    // Dateneinfügen wie in Lerndaten
    $modulname = $_POST['modulname'];
    $modulbeschreibung = $_POST['modulbeschreibung'];
    $modulbewertung = $_POST['modulbewertung'];

 
    // SQL query um Daten einzufügen
    $sql = "INSERT INTO modul (modulname, modulbeschreibung, modulbewertung) VALUES ('$modulname', '$modulbeschreibung', '$modulbewertung')";

     if ($con->query($sql) === TRUE) {
        // Erfolgreich eingefügt, weiterleiten
        header("Location: modul.seite.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>
