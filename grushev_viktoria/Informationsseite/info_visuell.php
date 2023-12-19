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
	 
	   <link rel="stylesheet" href="../../stylesheet.css"> 
    <title> Erfassung der Lerntypen </title>
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	
  <body>
	  <header>
    <h1>EduLearn</h1>
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
      <li><a class="dropdown-item" href="../lerntyp_erfassung.php"Erfassungsseite/lerntyperfassung/lerntyp.erfassung.php"">Generelle Datenerfassung</a></li>
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
                        
                                                                                     </ul> 
	  
	   <!-- Link zur Startseite -->
		                       <li class="nav-item">
                                          <a class="nav-link" href="../../index.php">Zurück zur Startseite</a>
  </li>
</ul>
	  

</div>
	  
	  
  <!-- Beginn Formular-Sektion -->
	
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <h1 class="mb-4">Der visuell Lerntyp</h1>
                <img src="../Bilder/Visuell.png" alt="Kommunikativer Lerntyp" class="img-fluid mb-4">

                <h3 class="text-primary">Die Macht des Sehens: Warum visuelles Lernen mehr ist als nur bunte Bilder</h3>
                <p class="lead">Stell dir vor, du sitzt in einem Ökonomie-Kurs, und der Dozent beginnt mit Angebot und Nachfrage zu jonglieren. Theorien fliegen durch den Raum, und du fragst dich, ob das überhaupt mit der Realität zu tun hat. Hier ist der Deal: Ökonomie besteht nicht nur aus abstrakten Theorien, sondern auch aus lebendigen, sich entwickelnden Prozessen. Und da kommt der visuelle Lerntyp ins Spiel.
                    <!-- ... (rest of your content) ... -->
                </p>

                <!-- Bootstrap Accordion for Additional Information -->
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Tipps um mit dem visuellen Lerntypen zu lernen                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Mind Maps verwenden: Erstelle Mind Maps, um Informationen visuell zu organisieren. Dies hilft dir, Beziehungen zwischen verschiedenen Konzepten zu erkennen.

Farben verwenden: Verwende verschiedene Farben, um wichtige Punkte zu markieren. Farbcodierung kann dazu beitragen, Informationen zu kategorisieren und zu betonen.

Diagramme und Grafiken: Nutze Diagramme, Grafiken, Infografiken und andere visuelle Hilfsmittel, um komplexe Informationen darzustellen. Dies erleichtert das Verständnis und die Merkfähigkeit.

Visualisiere Geschichten: Wenn du etwas lernen möchtest, erstelle eine visuelle Geschichte oder eine Art Szenario, das die Informationen enthält. Dies kann das Verständnis fördern und das Erinnern erleichtern.

Karteikarten mit Bildern: Erstelle Karteikarten mit Bildern oder Symbolen, um Konzepte zu repräsentieren. Dies fördert die Assoziation von Bildern mit Informationen.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <footer class="bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>