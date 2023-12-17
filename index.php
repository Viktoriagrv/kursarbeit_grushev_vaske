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

// Verbindung zur Datenbank herstellen mit meinen Daten
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

// Verbindung wird erstellt
$con = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($con->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con->connect_error);
}

// SQL-Abfrage, um die letzten zehn Einträge abzurufen
$sql = "SELECT lerntyp AS Lerntyp, lernziel, aufgabe, inspiration, modul.modulname AS Modul
        FROM lerndaten
        JOIN lerntyp ON lerndaten.lerntyp_id = lerntyp.lerntyp_id
        JOIN modul ON lerndaten.modul_id = modul.modul_id
        ORDER BY lerndaten.id DESC
        LIMIT 10";

// Ausführen der SQL-Abfrage
$result = mysqli_query($con, $sql);

// Überprüfen, ob die Abfrage erfolgreich war
if ($result) {
    // Durchlaufen der Ergebnisdaten und Ausgabe in der Tabelle
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['lerntyp']}</td>";
        echo "<td>{$row['lernziel']}</td>";
        echo "<td>{$row['aufgabe']}</td>";
        echo "<td>{$row['inspiration']}</td>";
        echo "<td>{$row['modulname']}</td>";
        echo "</tr>";
    }

    // Freigeben des Ergebnisses
    mysqli_free_result($result);
} else {
    // Fehler bei der Abfrage
    echo "Fehler bei der Abfrage: " . mysqli_error($con);
}

// Schließen der Verbindung zur Datenbank
mysqli_close($con);
?>

					
					
					
					
					
					
					
	
	
	
	
	
	
					
					
					
	
					
<br></br>
<h3> Lernstrategien</h3>
<h5> Hier siehst du die letzten Einträge von Student_innen</h5>
			
			
			
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
                    <th>Semester</th>
                    <th>Lernerfolg</th>
					<th>Lernstrategie</th>
					<th>Zeitpunkt</th>
         
                </tr>
                </thead>
				
                <!-- Tabellenkörper für Daten -->
				
                <tbody>
					
					
					
					 <!-- Hier PHP-Datenbank Verbindung 2 -->
                    <?php
                        // Verbindung zur Datenbank
                     

                        // Abfrage für die Daten
                        $query = "SELECT studierende, semester, lernstrategie, lernerfolg,  zeitpunkt FROM lerndaten ORDER BY id DESC LIMIT 5"; 
					
                        $result = mysqli_query($con, $query);

                        // Daten aus der Abfrage in die Tabelle einfügen
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['vorname']}</td>";
                            echo "<td>{$row['semester']}</td>";
							echo "<td>{$row['lernerfolg']}</td>";
                            echo "<td>{$row['lernstrategie']}</td>";
							echo "<td>{$row['zeitpunkt']}</td>";
                            echo "</tr>";
                        }

                        // Verbindung schließen
                        mysqli_close($con);
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
