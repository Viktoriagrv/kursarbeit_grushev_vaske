<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="../../stylesheet.css">
	
	
	
    <title>EduLearn</title>
	<!-- Definition vom Dokumententypen-->

	
<!-- Definition der Sprache "de" = deutsch -->
<html lang="de">
	
	<!-- Meta-Daten sind im Headbereich anzutreffen-->
	
	

	
	
	
	
<
	
  <head>
	  
	
   
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	
</head>
	
	
	
	
<body>
    <header>
        <h1>Lernstrategie</h1>
  
    </header>

	 <!-- Das ist meine Navigationsleiste mit Bootstrap -->
	  
	  <ul class="nav nav-tabs">
  <li class="nav-item">
   <a class="nav-link" href="../StartseiteLisa.php">Home</a></li>	
		  
		  
		  
		  
  <!-- Dropdownlink 1 -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen</a>
    <ul class="dropdown-menu">
     
	  <a class="nav-link" href="../InfoLisa/Lernstartegien.php">Lernstrategien</a></li>
		
	  <a class="nav-link" href="../InfoLisa/Konzentration.php">Konzentration</a></li>
		
	  <a class="nav-link" href="../InfoLisa/Motivation.php"> Motivation</a></li>
		
	
	
	  
	  
	  
	  
	  
	  </ul>     
		  
      <!-- Dropdownlink 2 -->
  <li class="nav-item dropdown">
   
  <a class="nav-link" href="../ErfassungLisa.php"> Erfassung deiner Daten</a></li>
	  
	  <!-- Dropdown Link 3 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
    
		  <a class="nav-link" href="Lernstrategien.php">Lernstrategien</a></li>
		
	  <a class="nav-link" href="Konzentration.php">Konzentration</a></li>
	
	  <a class="nav-link" href="Motivation.php">Motivation</a></li>
    </ul> 
	  
		  <!-- Link zur Startseite -->
		   <li class="nav-item">
	
	
	
	
    <a class="nav-link" href="../../index.php">Zurück zur Startseite</a>
  </li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  	
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	<div>	
	
<img id="logo" src="../bilder/Logo_rund1.png" alt="UnserLogo" width="100" height="100">	
	
</div>
	
	
    <main>
        <h2>Willkommen auf der Statistik-Seite</h2>
        <!-- Hier kommt der Hauptinhalt meiner Seite -->
    </main>





<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawCharts);

      function drawCharts() {
		  
		  
		  
        // Daten für das kognitive Diagramm
        var data1 = new google.visualization.DataTable();
        data1.addColumn('string', 'Topping');
        data1.addColumn('number', 'Slices');
        data1.addRows([
          ['gelungen', 2],
          ['mäßig gelungen', 2],
          ['nicht gelungen', 1]
        ]);
        var options1 = {
          'title':'Lernerfolg per kognitiver Lernstrategie',
          'width':400,
          'height':300
        };
        var chart1 = new google.visualization.PieChart(document.getElementById('chart_div_1'));
        chart1.draw(data1, options1);

		  
		  
		  
        // Daten für das metakognitive Diagramm
        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Topping');
        data2.addColumn('number', 'Slices');
        data2.addRows([
          ['gelungen', 1],
          ['nicht gelungen', 4]
        ]);
        var options2 = {
          'title':'Lernerfolg per metakognitiver Lernstrategie',
          'width':400,
          'height':300
        };
        var chart2 = new google.visualization.PieChart(document.getElementById('chart_div_2'));
        chart2.draw(data2, options2);

		  
		  
		  
        // Daten für das ressourcenbezogene Diagramm
        var data3 = new google.visualization.DataTable();
        data3.addColumn('string', 'Topping');
        data3.addColumn('number', 'Slices');
        data3.addRows([
          ['gelungen', 2],
          ['mäßig gelungen', 1],
          ['nicht gelungen', 1]
        ]);
        var options3 = {
          'title':'Lernerfolg per ressourcenbezogener Lernstrategie',
          'width':400,
          'height':300
        };
        var chart3 = new google.visualization.PieChart(document.getElementById('chart_div_3'));
        chart3.draw(data3, options3);
      }
    </script>

   
  </head>

  <body>
	  
	  
	  
    <!-- Container für die Kuchendiagramme -->
    <div class="chart-container">
      <div class="chart-item">
        <div id="chart_div_1"></div>
      </div>
      <div class="chart-item">
        <div id="chart_div_2"></div>
      </div>
      <div class="chart-item">
        <div id="chart_div_3"></div>
      </div>
    </div>
  </body>
</html>







<!-- ab hier eigentliche Tabelle-->


				
			<!-- Hier beginnt die Tabelle 2 - Container für mittige Ausrichtung der Tabelle -->
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
                    <th>Anzahl insgesamt gelungenes Lernen</th>
                    <th>Anzahl insgesamt mäßig gelungenes Lernen</th>
                    <th>Anzahl insgesamt nicht gelungenes Lernen</th>
					<th>Am häufigsten angewendete Lernstrategie</th>
         
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
























	
	
	
	
	
    <footer>
        <h3>Created by Lisa Vaske</h3>
        <p>Adresse: Wilhelmshaven</p>
        <p>Email: lisa.vaske@student.jade-hs.de</p>
	   <section> <p>In Koooperation mit der Jade Hochschule</p></section>
   </footer>
</body>
</html>
