<?php
// Verbindung zur Datenbank
include 'verarbeitung.php';

// Abfrage für die Daten
$query = "SELECT lerntyp_id, lernziel, aufgabe, inspiration, modul_id FROM lerndaten ORDER BY id DESC LIMIT 10"; 

$result = mysqli_query($con, $query);

// Daten aus der Abfrage in die Tabelle einfügen
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['lerntyp_id']}</td>";
    echo "<td>{$row['lernziel']}</td>";
    echo "<td>{$row['aufgabe']}</td>";
    echo "<td>{$row['inspiration']}</td>";
    echo "<td>{$row['modul_id']}</td>"; // Corrected column name
    echo "</tr>";
}


// Verbindung schließen
mysqli_close($con);
?>

