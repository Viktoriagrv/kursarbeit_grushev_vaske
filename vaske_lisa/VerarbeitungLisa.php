<?php

//Datenbank: meine Daten

$servername="m12241-32.kurs.jade-hs.de";
$username="m12241-32";
$passwort="bZlvguhrx";
$dbname="m12241-32";

//Verbindung erstellen
$conn=new mysqli($servername, $username, $passwort, $dbname);

	if (isset ($_POST["gesendet"])) {
		//wurde das Formular gesendet
		$studierende=$_POST['studierende'];
		$semester=$_POST['semester'];
		$lernerfolg=$_POST['lernerfolg'];
		$lernstrategie=$_POST['lerstrategie'];
		$zeitpunkt=$_POST['zeitpunkt'];
		
		//Query
		$insert_query="INSERT INTO studierende (studierende,lernstrategie,semester,lernerfolg,zeitpunkt) VALUES ('$studierende','$semester','$lernerfolg','$lernstrategie','$zeitpunkt')";
		
		if (mysqli_query($conn, $insert_query)) {
			echo "Erfolgreich in Datenbank hinzugefügt";
		} else{
			echo "Fehler beim Einfügen" . $insert_query . "<br>" . mysqli_error($conn);
		}
	}
?>
	
	
	
	
	
   