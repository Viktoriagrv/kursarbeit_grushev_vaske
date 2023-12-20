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
$conn = new mysqli($servername, $username, $passwort, $dbname);


	
	// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

   
  // SQL Abfrage
  $sql = "SELECT strategie.strategie, COUNT(studierendestrategie.strategieid) as anzahl
   FROM strategie
   LEFT JOIN studierendestrategie ON strategie.strategieid = studierendestrategie.strategieid
   GROUP BY strategie.strategieid";

	$result = $conn->query($sql);

// Daten aus der Abfrage in die Tabelle einfügen, dafür konvertieren
$data=array();
while ($row = $result->fetch_assoc()) {
$data[]=$row;
					
 }

// Json ausgeben
echo json_encode($data);

 // Schließen der Verbindung 
 $conn->close();

 ?>
					
	  





					

                    
                    


                   
   
	
	
	
	
     <footer>
        <h3>Created by Lisa Vaske</h3>
        <p>Adresse: Wilhelmshaven</p>
        <p>Email: lisa.vaske@student.jade-hs.de</p>
	   <section> <p>In Koooperation mit der Jade Hochschule</p></section>
   </footer>
</body>
</html>
