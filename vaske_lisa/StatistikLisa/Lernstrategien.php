<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="../CSS/lisa_vaske.css"
	
	
    <title>EduLearn</title>
	<!-- Definition vom Dokumententypen-->

	
<!-- Definition der Sprache "de" = deutsch -->
<html lang="de">

	
  <head>
	  
	
   
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	  
	 <!-- Einbindung von Bootstrap Java Script -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	  
  </head>

	
	
	
	
<body>
	
	<div class="grid-container">
<div class="grid-item">
	
	
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
	  
	
    <a class="nav-link" href="../../index.php">Zurück zur Startseite</a>
  </li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  	

	<div>	
	
<img id="logo" src="../bilder/Logo_rund1.png" alt="UnserLogo" width="100" height="100">	
	
</div>
	
	
        <h2>Willkommen auf der Statistik-Seite</h2>
        <!-- Hier kommt der Hauptinhalt meiner Seite -->
    </main>


<!-- ---------------------------------ab hier Tabelle----------------------------------->
      
				
             
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
		
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawCharts);

      function drawCharts() {
		  
		  
				§.ajax({      
					url:'Statistik_VerarbeitungLisa.php',
					dataType:'json',
					success:function (data) {
					//Daten erhalten, jetzt dataTable-Objekt erstellen
        var data= new google.visualization.DataTable();
        data.addColumn('string', 'Lernstrategie');
        data.addColumn('number', 'Anzahl');
		
		//Schleife durch Daten und zu data1 hinzufügen
						for(var i=0;i<data4.length; i++) {
							data.addRow([data[i].strategie, data[i].anzahl]);
						}
		//Diagramm erstellen				
        var options = {
          'title':'Lernstrategien',
          'width':400,
          'height':300
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_1'));
        chart.draw(data, options);
				
					}
				});
                
		  </script>	
				</head>
			<body>
				
				<div class="chart-container">
      <div class="chart-item">
        <div id="chart_div_1"></div>
		  
		  
			<!-- Div, in dem das Diagramm angezeigt wird-->
			<div id="chart_div_1"></div>
		  
		  
		  
		  
		
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
	  
		  
		  
		  
		  
				
			</body>	
				
				
            </table>
        </div>
    </div>
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
