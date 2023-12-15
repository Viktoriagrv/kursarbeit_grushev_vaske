<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Benutzerdaten aus dem Formular abrufen
$benutzer = isset($_POST['benutzer']) ? $_POST['benutzer'] : '';
$lerntyp = isset($_POST['lerntyp']) ? $_POST['lerntyp'] : '';
$inspiration = isset($_POST['inspiration']) ? $_POST['inspiration'] : '';
$modul = isset($_POST['modul']) ? $_POST['modul'] : '';

// Überprüfen, ob alle POST-Daten vorhanden sind
if (!$benutzer || !$lerntyp || !$inspiration || !$modul) {
    die("Bitte fülle alle Formularfelder aus.");
}

// SQL-Query mit INNER JOIN
$sql = "INSERT INTO benutzer (benutzer, lerntyp_id, inspiration_id, modul_id)
        SELECT ?, lerntyp.lerntyp_id, inspiration.inspiration_id, modul.modul_id
        FROM lerntyp
        INNER JOIN inspiration ON lerntyp.lerntyp = ? AND inspiration.inspiration = ?
        INNER JOIN modul ON modul.modul = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $benutzer, $lerntyp, $inspiration, $modul);

if (!$stmt->execute()) {
    echo "Fehler beim Einfügen der Daten: " . $stmt->error;
} elseif ($stmt->affected_rows === 0) {
    echo "Keine Zeilen eingefügt. Überprüfe die INNER JOIN-Bedingungen.";
} else {
    echo "Daten erfolgreich eingefügt. ID: " . $stmt->insert_id;
}

$stmt->close();
$conn->close();
?>
