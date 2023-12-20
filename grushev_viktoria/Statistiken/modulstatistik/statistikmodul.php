<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/grushev_css/grushev_css.css"> 
    <title>Statistik Modul</title>
    	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	<!-- Java Script -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
		
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Daten vom Server mit AJAX abrufen
            $.ajax({
                url: 'statistik_modul_erfassung.php', // Verlinkung PHP Datei
                dataType: 'json',
                success: function (data) {
                    var chartData = new google.visualization.DataTable();
                    chartData.addColumn('string', 'Modul');
                    chartData.addColumn('number', 'Anzahl');

                    // Annahme: Deine Daten haben 'lerntyp' und 'lerntyp_id' Spalten
                    for (var i = 0; i < data.length; i++) {
                    chartData.addRow([data[i].modulname, parseInt(data[i].anzahl)]);
                    }
 
					// Größeneinstellung 
                    var options = {
                        'title': 'Modul Verteilung',
                        'width': 600,
                        'height': 400
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                    chart.draw(chartData, options);
                }
            });
        }
    </script>
	
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
                                                  <li><a class="dropdown-item" href="../../lerntyp_erfassung.php"> Generelles Erfassungsformular </a></li>
                                                        <li>
												         	 <a class="dropdown-item" href="../../Erfassungsseite/lerntyperfassung/lerntyp.seite.php"> Neues Lerntyp-Profil anlegen</a> </li>
		                                                          <li><a class="dropdown-item" href="../../Erfassungsseite/modulerfassung/modul.seite.php"> Neues Modul-Profil anlegen</a></li>
						                                                                </ul> 
						  
	  
	                 <!-- Dropdownlink 3 Bootstrap: Statistikseiten --> 
           <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
                                        <ul class="dropdown-menu">
										
                       <li> <a class="dropdown-item" href="../statistiklerntyp.php">Statistik Lerntypen </a></li>
	                        <li><a class="dropdown-item" href="statistikmodul.php">Statistik Modul </a></li>
							  <li><a class="dropdown-item" href="../generalstatistik/generalstatistik.php"> Generelle Statistik </a></li>
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
			<p class="blue-form"> Welches Modul wird am meisten unter Studenten hier gelernt? Hier kriegt ihr immer eine aktuelle Vorschau! </p>
  <!-- Link zur anderen Statistik -->
<a href="../statistiklerntyp.php"class="btn btn-secondary mb-5">Willst du sehen wie es bei den Lerntypen aussieht, die gelernt werden? Hier entlang!</a>
	  

</div>
<!-- Beginn von Statistik -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
    <div id="chart_div"></div>
			
</form>
        </div>
    </div>
</div>
	  	
			
			
   <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
</body>
</html>

