<?php

// Fehlermeldung, 
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank 
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

// Verbindung wird hergestellt
$con = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($con->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con->connect_error);
}
// Wenn gesendet dann...
if (isset($_POST["gesendet"])) {
	
    // Lerntyp einfügen 
    $lerntyp = $_POST['lerntyp'];
 
        // SQL QUERY um Daten in Lerntypen einzufügen
           $sql = "INSERT INTO lerntyp (lerntyp) VALUES ('$lerntyp')";
	        
	                // SQL QUERY um Daten in Lerntypen einzufügen
                         if ($con->query($sql) === TRUE) {
							 
                                  // Erfolgreich eingefügt, weiterleiten auf Lerntyp-Seite
                                     header("Location: lerntyp.seite.php");
                                         exit(); 
                                           } else {
                                           
							                  echo "Error: " . $sql . "<br>" . $con->error;
                                                                                           }

                                                        // Datenbank schließen
                                                                $con->close();
                                                                               }
                                                                                 ?>



