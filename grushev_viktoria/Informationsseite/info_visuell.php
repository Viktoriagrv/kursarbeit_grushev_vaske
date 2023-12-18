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
		  

	  <!-- Dropdown Link 3 für die Statistikseiten. Geplant: 2 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
	    <!-- Verlinkung Statistik -->
                <li><a class="dropdown-item" href="#">Statistik Lerntypen </a></li>
                         <li><a class="dropdown-item" href="#">Statistik Modul </a></li>
                                                                                     </ul> 
	   <!-- Link zu Viktoria Startseite -->
		                       <li class="nav-item">
                          <a class="nav-link" href="../lerntyp_erfassung.php">Zurück zur Erfassung</a>
		
	   <!-- Link zur Startseite -->
		                       <li class="nav-item">
                                          <a class="nav-link" href="../../index.php">Zurück zur Startseite</a>
  </li>
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  
	  
  <!-- Beginn Formular-Sektion -->
	<!-- Beginn Formular-Sektion -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center"> <!-- Zentrierung der Überschrift -->
                <h1 class="mb-4">Der visuell Lerntyp</h1>

                <!-- Bild  -->
                <img src="../Bilder/Visuell.png" alt="Kommunikativer Lerntyp" class="img-fluid mb-4">

                <!-- Text einfügen -->
                <p>Hier kommt noch Text hin! Dieser Text ist super toll und einfach spannend! </p>
				<br>
				<p> Einfach noch spannender!</p>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


				
   <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
  </body>
</html>