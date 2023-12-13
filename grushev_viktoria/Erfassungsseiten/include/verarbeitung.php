<?php
// DB-Verbindungsdatei einbinden
include 'dbconnect.inc.php';

// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Daten aus dem Formular extrahieren
    $benutzername = $_POST["benutzername"];
    $modul = $_POST["modul"];
    $semester = $_POST["semester"];
    $lerntyp = $_POST["lerntyp"];
    $beschreibung = $_POST["beschreibung"];
    
    // SQL-Query zum Einfügen der Daten in die Tabelle (ersetze dies durch deine eigene Tabelle)
    $sql = "INSERT INTO deine_tabelle (benutzername, modul, semester, lerntyp, beschreibung) VALUES ('$benutzername', '$modul', '$semester', '$lerntyp', '$beschreibung')";
    
    // Überprüfen, ob das Einfügen erfolgreich war
    if (mysqli_query($con, $sql)) {
        echo "Daten erfolgreich erfasst!";
    } else {
        echo "Fehler beim Erfassen der Daten: " . mysqli_error($con);
    }
    
} else {
    // Falls das Formular nicht korrekt gesendet wurde, eine Fehlermeldung ausgeben
    echo "Formular wurde nicht korrekt gesendet.";
}

// Verbindung schließen
mysqli_close($con);
?>



