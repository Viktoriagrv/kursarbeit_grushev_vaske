<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank herstellen (ersetze die Platzhalter durch deine Zugangsdaten)
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

// Füge diesen Wert in den SQL-Query ein
$sql = "INSERT INTO benutzer (benutzer, lerntyp_id, inspiration_id)
        VALUES (?, (SELECT lerntyp_id FROM lerntyp WHERE lerntyp = ?),
                  (SELECT inspiration_id FROM inspiration WHERE inspiration = ?))";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $benutzer, $lerntyp, $inspiration);

if ($stmt->execute()) {
    echo "Daten erfolgreich eingefügt";
} else {
    echo "Fehler beim Einfügen der Daten: " . $stmt->error;
}

$stmt->close();

?>


