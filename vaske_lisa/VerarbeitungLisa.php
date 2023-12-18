<?php

// Datenbank: meine Daten
$servername = "localhost";
$username = "m12241-32";
$passwort = "bZlvguhrx";
$dbname = "m12241_32";

// Verbindung erstellen
$con = new mysqli($servername, $username, $passwort, $dbname);

if (isset($_POST["gesendet"])) {
    // wurde das Formular gesendet
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $lernid = $_POST['lernid'];
    $strategieid = $_POST['strategieid'];
    $semesterid = $_POST['semesterid'];

    // Query
   $insert_query = "INSERT INTO studierendestrategie (vorname, nachname, lernid, strategieid, semesterid) VALUES ('$vorname','$nachname','$lernid','$strategieid','$semesterid')";

    if (mysqli_query($con, $insert_query)) {
        echo "Erfolgreich in Datenbank hinzugefügt";
    } else {
        echo "Fehler beim Einfügen" . $insert_query . "<br>" . mysqli_error($con);
    }
}

?>


	
   