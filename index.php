<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Startseite Kursarbeit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	
<style>
    /* CSS-Styling für das Logo */
    #logo {
      position: absolute;
      top: 1px; 
      right: 10px; 
    }
  </style>	
	
	
	</head>
<body>

<h1> EduLearn </h1>

<!-- Das ist meine Navigationsleiste mit Bootstrap -->

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>

    <!-- Link zu Lisas Seite -->
    <li class="nav-item">
        <a class="nav-link" href="vaske_lisa/StartseiteLisa.php">Lernstrategien</a>
    </li>
    <!-- Link zu Vikas Seite -->
    <li class="nav-item">
        <a class="nav-link" href="grushev_viktoria/lerntyp_erfassung.php">Lerntypen und Modulaufwand</a>
    </li>
</ul>
<!-- Hier ist die Navigationsleiste zuende -->

	
	
	<br>
	
<div>	
	
<img id="logo" src="vaske_lisa/bilder/Logo_rund1.png" alt="UnserLogo" width="100" height="100">	
	
</div>
	</br>
	
<br></br>
<h3 class="text-center">Lerntypen</h3>
	
<h5 class="text-center">Hier siehst du die letzten Einträge von Student_innen</h5>

<!-- Hier beginnt die Tabelle 1 - Container für mittige Ausrichtung der Tabelle -->
<div class="container">
	
    <!-- Bootstrap Grid-System: Zentrierte Reihe -->
    <div class="row justify-content-center mt-5">
		
        <!-- Bootstrap Grid-System: Mittlere Spalte mit einer Breite von 8/12 -->
        <div class="col-md-8">
			
            <!-- Bootstrap-Tabelle mit blauem Hintergrund -->
            <table class="table table-bordered table-striped table-primary">
				
                <!-- Tabellenkopf mit dunklem Hintergrund -->
                <thead class="thead-dark">
                   
							<tr>
                        <!-- Spaltenüberschriften -->
                        <th>Lerntyp</th>
                        <th>Lernziel</th>
                        <th>Aufgabe</th>
                        <th>Lerntyp-Inspiration</th>
                        <th>Modul</th>
                    </tr>
					
                </thead>
				
                <!-- Tabellenkörper für Daten -->
                <tbody>

	<?php
// Fehlermeldung
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank herstellen für die erste Datenbank
$servername1 = "localhost";
$username1 = "m12241-09";
$password1 = "l97tJZA8W";
$dbname1 = "m12241_09";

// Verbindung wird erstellt für die erste Datenbank
$con1 = new mysqli($servername1, $username1, $password1, $dbname1);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($con1->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con1->connect_error);
}

// SQL-Abfrage, um die letzten zehn Einträge abzurufen für die erste Datenbank
$sql1 = "SELECT lerntyp AS lerntyp, lernziel, aufgabe, inspiration, modul.modulname AS modul
        FROM lerndaten
        JOIN lerntyp ON lerndaten.lerntyp_id = lerntyp.lerntyp_id
        JOIN modul ON lerndaten.modul_id = modul.modul_id
        ORDER BY lerndaten.id DESC
        LIMIT 10";

// Ausführen der SQL-Abfrage für die erste Datenbank
$result1 = mysqli_query($con1, $sql1);

// Überprüfen, ob die Abfrage erfolgreich war für die erste Datenbank
if ($result1) {
    // Durchlaufen der Ergebnisdaten und Ausgabe in der Tabelle für die erste Datenbank
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "<tr>";
        echo "<td>{$row['lerntyp']}</td>";
        echo "<td>{$row['lernziel']}</td>";
        echo "<td>{$row['aufgabe']}</td>";
        echo "<td>{$row['inspiration']}</td>";
        echo "<td>{$row['modul']}</td>";
        echo "</tr>";
    }

    // Freigeben des Ergebnisses für die erste Datenbank
    mysqli_free_result($result1);
} else {
    // Fehler bei der Abfrage für die erste Datenbank
    echo "Fehler bei der Abfrage: " . mysqli_error($con1);
}

// Schließen der Verbindung zur ersten Datenbank
mysqli_close($con1);
?>

					
					
					

			<!-- Hier beginnt die Tabelle 1 - Container für mittige Ausrichtung der Tabelle -->
<div class="container">
    <!-- Bootstrap Grid-System: Zentrierte Reihe -->
    <div class="row justify-content-center mt-5">
        <!-- Bootstrap Grid-System: Mittlere Spalte mit einer Breite von 8/12 -->
        <div class="col-md-8">
			
			
            <!-- Bootstrap-Tabelle -->
            <table class="table">
                <!-- Tabellenkopf mit dunklem Hintergrund -->
                <thead class="thead-dark">
                <tr>
                    <!-- Spaltenüberschriften -->
                    <th>Studierende/r</th>
                    <th>Nachname</th>
                    <th>Lernerfolg</th>
					<th>Lernstrategie</th>
					<th>Semester</th>
         
                </tr>
                </thead>
				
                <!-- Tabellenkörper für Daten -->
				
                <tbody>
					
					
					 <!-- Hier PHP-Datenbank Verbindung 2 -->
                     <!-- Hier PHP-Datenbank Verbindung 2 -->
                    <?php

                    // Verbindungsparameter definieren für die zweite Datenbank
                    $servername2 = "localhost";
                    $username2 = "m12241-32";
                    $passwort2 = "bZlvguhrx";
                    $dbname2 = "m12241_32";

                    // Verbindung zur zweiten Datenbank herstellen
                    $con2 = new mysqli($servername2, $username2, $passwort2, $dbname2);

                    // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
                    if ($con2->connect_error) {
                        die("Verbindung fehlgeschlagen: " . $con2->connect_error);
                    }

                    // Abfrage für die Daten für die zweite Datenbank
                    $query = "SELECT vorname, nachname, lernerfolg, startegie, semester FROM studierendestrategie ORDER BY studierendestrategie.id DESC LIMIT 10";

                    // SQL für die zweite Datenbank
                    $sql2 = "SELECT vorname, nachname, lernerfolg.lernerfolg AS lernerfolg, strategie.strategie AS strategie, semester.semester AS semester
                            FROM studierendestrategie
                            JOIN lernerfolg ON studierendestrategie.lernid = lernerfolg.lernid
                            JOIN strategie ON studierendestrategie.strategieid = strategie.strategieid
                            JOIN semester ON studierendestrategie.semesterid = semester.semesterid
                            ORDER BY studierendestrategie.id DESC
                            LIMIT 10";

                    $result2 = mysqli_query($con2, $sql2);

                    // Daten aus der Abfrage in die Tabelle einfügen für die zweite Datenbank
                    while ($row = mysqli_fetch_assoc($result2)) {

                        echo "<tr>";
                        echo "<td>{$row['vorname']}</td>";
                        echo "<td>{$row['nachname']}</td>";
                        echo "<td>{$row['lernerfolg']}</td>";
                        echo "<td>{$row['strategie']}</td>";
                        echo "<td>{$row['semester']}</td>";
                        echo "</tr>";
                    }

                    // Freigeben des Ergebnisses für die zweite Datenbank
                    mysqli_free_result($result2);

                    // Schließen der Verbindung zur zweiten Datenbank
                    mysqli_close($con2);
                    ?>
					
					
					
                </tbody>
            </table>
        </div>
    </div>
</div>

   <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
			
<!-- Einbindung von Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
