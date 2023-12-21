<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="../CSS/lisa_vaske.css">

	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	  
	 <!-- Einbindung von Bootstrap Java Script -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	  
  </head>

	
	
	
<body>
	

	  <header>
		  
    <h1>EduLearn</h1>
		  <div>
					  
   <img src="../bilder/Logo_rund1.png" alt="Logo" class="logo">
		  </div>
</header>
		
  

<div class="grid-container">
<div class="grid-item">

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
	
	  <a class="nav-link" href="../InfoLisa/Motivation.php">Motivation</a></li>
	 
	  
		

	  </ul>     
		  
      <!-- Dropdownlink 2 -->
  <li class="nav-item dropdown">
   
  <a class="nav-link" href="../ErfassungLisa.php"> Erfassung deiner Daten</a></li>
	  
	  <!-- Dropdown Link 3 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
    
		  <a class="nav-link" href="Lernstrategien.php">Lernstrategien</a></li>
	
		
		<a class="nav-link" href="Statistik Lernstrategien/lernstrategiestatistik.php">Lernerfolg</a></li>
    </ul> 
	  
	
    <a class="nav-link" href="../../index.php">Zurück zur Startseite</a></li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  	

	
	
        <h2>Willkommen auf einer unserer Statistik-Seiten</h2>
        <!-- Hier kommt der Hauptinhalt meiner Seite -->
    </main>


<!-- ---------------------------------ab hier Tabelle----------------------------------->
      
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
	  </div>
	</div>
  </body>
</html>





	
	
   <!-- Bootstrap Footer -->
  <footer class="bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
</body>
</html>
