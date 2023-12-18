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
		$vorname=$_POST['vorname'];
		$nachname=$_POST['nachname'];
		$lernerfolg=$_POST['lernerfolg'];
		$strategie=$_POST['strategie'];
		$semester=$_POST['semester'];
		
		//Query
		$insert_query="INSERT INTO studierendenstrategie (vorname,nachname,lernerfolg,strategie,semester) VALUES ('$vorname','$nachname','$lernerfolg','$strategie','semmester')";
		
		if (mysqli_query($con, $insert_query)) {
			echo "Erfolgreich in Datenbank hinzugefügt";
		} else{
			echo "Fehler beim Einfügen" . $insert_query . "<br>" . mysqli_error($conn);
		}
	}
?>
	
	
	
	
	
   