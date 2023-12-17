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
    $lerntyp = $_POST['lerntyp'];
  

 
    // SQL query um Daten einzufügen
    $sql = "INSERT INTO lerntyp (lerntyp) VALUES ('$lerntyp')";

    if ($con->query($sql) === TRUE) {
        echo "Neues Lerntyp-Profil erfolgreich hinzugefügt!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>


