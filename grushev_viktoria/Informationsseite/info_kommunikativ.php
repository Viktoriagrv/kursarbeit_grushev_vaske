<!-- Definition vom Dokumententypen-->
<!doctype html>
<!-- Definition der Sprache "de" = deutsch -->
<html lang="de">
	
	<!-- Meta-Daten sind im Headbereich anzutreffen-->
  <head>
	  
	  <!-- Zeichensatz UTF-8 -->
    <meta charset="utf-8">
	  
	  <!-- Anzeigeeingenschaften für Geräte -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="../css/grushev_css/grushev_css.css"> 
    <title> Erfassung der Lerntypen </title>
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	
  <body>
      <header>
    <h1>EduLearn</h1>
		  <div>
					   <!-- Verlinkung Bild -->
                     <img src="../../../vaske_lisa/bilder/Logo_rund1.png" alt="Logo" class="logo">
                                                                                               </div>
</header>
    
	  
	  	 
	 	   <!-- Navigationsleiste mit Bootstrap -->
	  
	  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
		  
  <!-- Dropdownlink für die Informationen mit Bootstrap -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen</a>
    <ul class="dropdown-menu">
		  <!-- Verlinkung für die einzelnen Seiten -->
      <li><a class="dropdown-item" href="info_visuell.php">Lerntyp Visuell </a></li>
            <li><a class="dropdown-item" href="info_auditiv.php"> Lerntyp Auditiv </a></li>
                 <li><a class="dropdown-item" href="info_motorisch.php"> Lerntyp Motorisch </a></li>
		             <li><a class="dropdown-item" href="info_kommunikativ.php"> Lerntyp Kommunikativ</a></li>
		  </ul>     
		  
      <!-- Dropdownlink 2 für die Erfassungsseite mit der Datenbankverindung! Vielleicht kommt das auf die Startseite -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Erfassung deiner Daten</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="../lerntyp_erfassung.php">Generelle Datenerfassung</a></li>
		<li><a class="dropdown-item" href="../Erfassungsseite/lerntyperfassung/lerntyp.seite.php">Lerntyp-Profil Datenerfassung</a></li>
		<li><a class="dropdown-item" href="../Erfassungsseite/modulerfassung/modul.seite.php">Modul-Profil Datenerfassung</a></li>
    </ul> 
	  
	  <!-- Dropdown Link 3 für die Statistikseiten. Geplant: 2 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
	    <!-- Verlinkung Statistik -->
                <li><a class="dropdown-item" href="../Statistiken/statistiklerntyp.php">Statistik Lerntypen </a></li>
		<li><a class="dropdown-item" href="../Statistiken/modulstatistik/statistikmodul.php">Statistik Modul </a></li>
		<li><a class="dropdown-item" href="../Statistiken/generalstatistik/generalstatistik.php">Generelle Statistik </a></li>
                        
                                                                                     </ul> 
	  
	   <!-- Link zur Startseite -->
		                       <li class="nav-item">
                                          <a class="nav-link" href="../../index.php">Zurück zur Startseite</a>
  </li>
</ul>
	  

</div>
	<!-- Beginn Mitte -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            
			
			
            <p class="blue-form">Der kommunikative Lerntyp:</p>
            <p>
                Kommunikative Lernende bevorzugen den Austausch von Informationen, Diskussionen und Zusammenarbeit, um Inhalte zu verstehen. Wenn du ein kommunikativer Lerntyp bist, profitierst du besonders von Gruppenaktivitäten, Gesprächen und sozialen Interaktionen.
                Du verstehst Informationen besser, wenn du sie mit anderen besprichst und teilst. Deine Stärke liegt in der Fähigkeit, durch Kommunikation und Interaktion Muster und Zusammenhänge zu erkennen.
                Um deinen Lernprozess zu optimieren, empfehlen wir, in Gruppen zu arbeiten, Diskussionen zu führen und aktiv an sozialen Lernaktivitäten teilzunehmen. Achte darauf, dass du deine Ideen und Erkenntnisse mit anderen teilst.
            </p>
            <img src="../Bilder/Kommunikativ.png" alt="Kommunikativer Lerntyp" class="img-fluid mt-3">
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


				
   <!-- Bootstrap Footer -->
  <footer class="bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
  </body>
</html>