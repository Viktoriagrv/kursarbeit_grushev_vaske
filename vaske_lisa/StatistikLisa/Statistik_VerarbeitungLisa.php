   <?php

// Fehlermeldung
error_reporting(E_ALL);
ini_set('display_errors', '1');



// Datenbank: meine Daten
$servername = "localhost";
$username = "m12241-32";
$passwort = "bZlvguhrx";
$dbname = "m12241_32";

// Verbindung erstellen
$con = new mysqli($servername, $username, $passwort, $dbname);


	
	// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($con->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con->connect_error);
}

   
  // SQL für die zweite Datenbank
                    $sql2 = "SELECT strategie.strategie, COUNT(studierendestrategie.strategieid) as anzahl
                            FROM strategie
                            LEFT JOIN studierendestrategie ON strategie.strategieid = studierendestrategie.strategieid
                            GROUP BY strategie.strategieid";

                    $result2 = mysqli_query($con2, $sql2);

                    // Daten aus der Abfrage in die Tabelle einfügen für die zweite Datenbank
                    while ($row = mysqli_fetch_assoc($result2)) {

                        echo "<tr>";
                        echo "<td>{$row['strategie']}</td>";
                        echo "</tr>";
                    }

                    // Freigeben des Ergebnisses für die zweite Datenbank
                    mysqli_free_result($result2);

                    // Schließen der Verbindung zur zweiten Datenbank
                    mysqli_close($con2);
                    ?>
					
	  





					

                    
                    


                   
   
	
	
	
	
     <footer>
        <h3>Created by Lisa Vaske</h3>
        <p>Adresse: Wilhelmshaven</p>
        <p>Email: lisa.vaske@student.jade-hs.de</p>
	   <section> <p>In Koooperation mit der Jade Hochschule</p></section>
   </footer>
</body>
</html>
