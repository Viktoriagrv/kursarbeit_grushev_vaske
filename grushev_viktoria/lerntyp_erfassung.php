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
	  
    <title> Erfassung der Lerntypen </title>
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

	
  <body>
	  
    <!-- Überschrift -->
	<h1> Erfassung deines Lerntypen </h1>
	  
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
      <li><a class="dropdown-item" href="Informationsseite/info_visuell.php">Lerntyp Visuell </a></li>
            <li><a class="dropdown-item" href="Informationsseite/info_auditiv.php"> Lerntyp Auditiv </a></li>
                 <li><a class="dropdown-item" href="Informationsseite/info_motorisch.php"> Lerntyp Motorisch </a></li>
		             <li><a class="dropdown-item" href="Informationsseite/info_kommunikativ.php"> Lerntyp Kommunikativ</a></li>
		  </ul>     
		  
      <!-- Dropdownlink 2 für die Erfassungsseite mit der Datenbankverindung! Vielleicht kommt das auf die Startseite -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Erfassung deiner Daten</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Lertyp Datenerfassung</a></li>
    </ul> 
	  
	  <!-- Dropdown Link 3 für die Statistikseiten. Geplant: 2 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
	    <!-- Verlinkung Statistik -->
                <li><a class="dropdown-item" href="#">Statistik Lerntypen </a></li>
                         <li><a class="dropdown-item" href="#">Statistik Modul </a></li>
                                                                                     </ul> 
	  
	   <!-- Link zur Startseite -->
		                       <li class="nav-item">
                                          <a class="nav-link" href="../index.php">Zurück zur Startseite</a>
  </li>
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  
	  
  <!-- Beginn Formular-Sektion -->
	  <!-- Erzeugt Container von Bootstrap  -->
<div class="container-fluid">
    <div class="mt-5 row">
        <div class="col-md-4">
        </div>
		
		<!-- Mittiger Teil nimmt vier Spalten ein, dort spielt sich mein Inhalt ab! -->
        <div class="col-md-4">
			
            <!-- erstellt ein Formular, das bei der Absendung die eingegebenen Daten an die "verarbeitung.php" mit POST-Methode sendet -->
		    <!-- PHP-Code zur Verarbeitung der Formulardaten ist in der verarbeitungs.php-->
			<form action="verarbeitung.php" method="POST">

				<!-- Formular Benutzername -->
				<!-- Form-Group wird für Bootstrap verwendet -->
			<div class="form-group">
				<!-- For verbindet mit "Benutzer" -->
                <label for="benutzer"> Gib dir einen Benutzernamen:</label>
                <input type="text" class="form-control" name="benutzer" placeholder="Dein Benutzername" required>
            </div>
			
		    <!-- Formular Modul -->
			<div class="form-group">
                <label for="modul">Wähle dein Modul:</label>
                <select class="form-control" name="modul">
                    <option value="" disabled selected>- Bitte wähle dein Modul aus -</option>
                    <option value="visuellekommunikation">Visuelle Kommunikation 1</option>
                    <option value="iteins">IT1</option>
                    <option value="itzwei">IT2</option>
                    <option value="speziellerjournalismus">Spezieller Journalismus</option>
                    <option value="mathematik">Mathematik</option>
                    <option value="medienundkommunikation">Medien und Kommunikation</option>
                    <option value="statistik">Statistik</option>
                    <option value="medienwirtschaftundmarketing">Medienwirtschaft und Marketing</option>
				</select>
            </div>
	
			<!-- Formular Lerntyp -->
			<div class="form-group">
                <label for="lerntyp">Wähle deinen Lerntyp:</label>
                <select class="form-control" name="lerntyp">
                    <option value="" disabled selected>- Bitte wähle deinen Lerntyp aus -</option>
                    <option value="auditiv">Auditiv</option>
                    <option value="visuell">Visuell</option>
                    <option value="kommunikativ">Kommunikativ</option>
                    <option value="motorisch">Motorisch</option>
                </select>
            </div>
			
				<!-- Formular Inspiration -->
			<div class="form-group">
                <label for="inspiration">Beschreibe wie du mit deinem Lerntypen lernst:</label>
                <input type="text" class="form-control" name="inspiration" placeholder="Inspiriere andere" required>
            </div>
			<br>
			  <!-- Absende-Button -->
    <button type="submit" class="btn btn-primary" name="gesendet">Senden</button>
</form>
				
        </div>
        <div class="col-md-4">
        </div>
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

