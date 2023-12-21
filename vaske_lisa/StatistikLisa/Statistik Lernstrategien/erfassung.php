<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/grushev_css/grushev_css.css"> 
    <title>Statistik Lerntyp</title>
    	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	
               	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-fXxu7mz9ATKxIepV6+rnNS3EKlkNw0dbV4N+s3VNA6Z/rU6w+Yvdy4ZI6A0CnC5u" crossorigin="anonymous"></script>

</head>
	
<body>
     <!-- Header -->
	  <header>
	     <div>
            <h1>EduLearn</h1>
               </div>
                   <div>
					   <!-- Verlinkung Bild -->
                     <img src="../../../vaske_lisa/bilder/Logo_rund1.png" alt="Logo" class="logo">
                                                                                               </div>
                                                                                                 </header>

	  
		   <!-- Navigationsleiste mit Bootstrap -->
	  
	                                          <ul class="nav nav-tabs">
                                                  <li class="nav-item">
													  <!--Verlinkung zur Homestartseite von mir -->
                                                      <a class="nav-link active" aria-current="page" href="../../lerntyp_erfassung.php">Home</a>
                                                                    </li>
		  
  <!-- Dropdownlink 1 Bootstrap: Informationen -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen zu Lerntypen</a>
           <ul class="dropdown-menu">
		
			   <!-- Verlinkung für die einzelnen Seiten -->
      <li><a class="dropdown-item" href="../../Informationsseite/info_visuell.php">Lerntyp Visuell </a></li>
            <li><a class="dropdown-item" href="../../Informationsseite/info_auditiv.php"> Lerntyp Auditiv </a></li>
                 <li><a class="dropdown-item" href="../../Informationsseite/info_motorisch.php"> Lerntyp Motorisch </a></li>
		             <li><a class="dropdown-item" href="../../Informationsseite/info_kommunikativ.php"> Lerntyp Kommunikativ</a></li>
		                                                                                                                       </ul>     
		  
             <!-- Dropdownlink 2 Bootstrap: Erfassung deiner Daten-->
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Erfassung deiner  Daten</a>
                                             <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="../../lerntyp_erfassung.php"../../grunderfassung_lerntyp.php""> Generelles Erfassungsformular </a></li>
                                                        <li>
												         	 <a class="dropdown-item" href="../../Erfassungsseite/lerntyperfassung/lerntyp.seite.php"> Neues Lerntyp-Profil anlegen</a> </li>
		                                                          <li><a class="dropdown-item" href="../../Erfassungsseite/modulerfassung/modul.seite.php"> Neues Modul-Profil anlegen</a></li>
						                                                                </ul> 
						  
	  
	                 <!-- Dropdownlink 3 Bootstrap: Statistikseiten --> 
           <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
                                        <ul class="dropdown-menu">
										
                       <li> <a class="dropdown-item" href="../statistiklerntyp.php">Statistik Lerntypen </a></li>
	                        <li><a class="dropdown-item" href="../modulstatistik/statistikmodul.php">Statistik Modul </a></li>
							  <li><a class="dropdown-item" href="generalstatistik.php"> Generelle Statistik </a></li>
                                                                                                                                              </ul> 
	  
	                              <!-- Link zur gemeinsamen Startseite -->
		                                <li class="nav-item">
                                            <a class="nav-link" href="../../../index.php">Zurück zur Startseite</a>
                                               </li>
	                                               </ul>
                                                      </div>
		                                                    <!-- Navigationsleiste zuende! -->
	<!-- Beginn von Statistik in der Mitte -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
			<div id="chart_div"></div>
			<p class="blue-form"> </p>
			
 <p class="blue-form"> Wie viel Lernerfolg hat ausgewählte Statistik? </p>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Verbindung zur Datenbank herstellen 
   $servername = "localhost";
$username = "m12241-32";
$passwort = "bZlvguhrx";
$dbname = "m12241_32";

    $conn = new mysqli($servername, $username, $passwort, $dbname);

    // Überprüfen der Verbindung
    if ($conn->connect_error) {
        die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
    }

    // Sicherstellen, dass die modul_id gesetzt ist und eine gültige Zahl ist
    if (isset($_POST['strategieid']) && is_numeric($_POST['strategieid'])) {
        $modul_id = $_POST['strategieid'];

        // Definition 
        $semesterid = 1; 

      $sql = "SELECT studierendestrategie.strategieid, strategie.strategie, studierendestrategie.semesterid, semester.semester 
        FROM studierendestrategie 
        INNER JOIN strategie ON studierendestrategie.strategieid = strategie.strategieid 
        INNER JOIN semester ON studierendestrategie.semesterid = semester.semester 
        WHERE studierendestrategie.strategieid = ?";




        // Prepared Statement verwenden, um SQL Injection zu verhindern (Das sind Sicherheitslücken)
        $stmt = $conn->prepare($sql);

        // Fehlerbehandlung für das Prepared Statement
        if (!$stmt) {
            die("Error in statement preparation: " . $conn->error);
        }

        // Parameter an bind_param übergeben
        $stmt->bind_param("i", $modul_id);

        // Query ausführen
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
				
                // Daten aus der Datenbank ausgeben
                while ($row = $result->fetch_assoc()) {
                    // Bootstrap-Tabelle
                    echo '<table class="table table-bordered table-hover">';
                    echo '<thead class="thead-light">';
                    echo '<tr>';
                    echo '<th scope="col">Strategie</th>';
                    echo '<th scope="col">Semester</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['strategie']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['semester']) . '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                }
            } else {
                echo "Keine Einträge";
            }
        } else {
            die("Error in statement execution: " . $stmt->error);
        }

        // Prepared Statement schließen
        $stmt->close();
    } else {
        echo "Ungültige Strategie-ID.";
    }

    // Verbindung schließen
    $conn->close();
?>
			
	
	<!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
</body>
</html>