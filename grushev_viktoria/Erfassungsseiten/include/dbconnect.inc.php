<?php

/*
    Zu Testzwecken können Sie lesend auf eine von meinen Datenbanken zugreifen.
    Sie können dafür den gleichen DB-Server verwenden, den Sie eingestellt haben.
*/

// Verbindungsdaten einfügen
$servername = "localhost"; // Hier den Datenbank-Server einfügen
$username = "m12241-09"; // Hier den Benutzernamen einfügen
$password = "l97tJZA8W"; // Hier das Kennwort einfügen
$database = "m12241_09"; // Hier die Datenbank einfügen

$con = mysqli_connect($servername, $username, $password, $database);

// Überprüfen der Verbindung
if (!$con) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

?>
