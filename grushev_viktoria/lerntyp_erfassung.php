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
	  

</div>
<!-- Beginn von Formular -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- Formular -->
            <form action="verarbeitung.php" method="post">

                <!-- Lernziel -->
                <div class="form-group">
                    <label for="lernziel">Lernziel</label>
                    <textarea class="form-control" id="lernziel" name="lernziel" cols="45" rows="5"></textarea>
                </div>

                <!-- Aufgabe -->
                <div class="form-group">
                    <label for="aufgabe">Aufgabe</label>
                    <textarea class="form-control" id="aufgabe" name="aufgabe" cols="45" rows="5"></textarea>
                </div>

                <!-- Inspiration -->
                <div class="form-group">
                    <label for="inspiration">Inspiration</label>
                    <textarea class="form-control" id="inspiration" name="inspiration" cols="45" rows="5"></textarea>
                </div>

                <!-- Lerntyp -->
                <div class="form-group">
                    <label for="lerntyp_id">Was ist dein Lerntyp?</label>
                    <select class="form-control" id="lerntyp_id" name="lerntyp_id">
                        <option value='1'>Auditiv</option>
                        <option value='2'>Kommunikativ</option>
                        <option value='3'>Visuell</option>
                        <option value='4'>Motorisch</option>
                    </select>
                </div>

                <!-- Modul -->
                <div class="form-group">
                    <label for="modul_id">Modul</label>
                    <select class="form-control" id="modul_id" name="modul_id">
                        <option value='1'>Psychologie</option>
                        <option value='2'>Grundlagen der Ökonomie</option>
                        <option value='3'>Grundlagen der Gestaltung</option>
                        <option value='4'>Informatik</option>
                        <option value='5'>Mathematik</option>
                        <option value='6'>Englisch</option>
                        <option value='7'>Rechnungswesen und Controlling</option>
                    </select>
                </div>
				
				  <!-- Semester -->
                <div class="form-group">
                    <label for="semester_id">Semester auswählen</label>
                    <select class="form-control" id="semester_id" name="semester_id">
                        <option value='1'>Semester 1</option>
                        <option value='2'>Semester 2</option>
                        <option value='3'>Semester 3</option>
                        <option value='4'>Semester 4</option>
                        <option value='5'>Semester 5</option>
                        <option value='6'>Semester 6</option>
                        <option value='7'>Semester 7</option>
						<option value='8'>Höheres Semester</option>
                    </select>
                </div>
				
				<!-- Aufwand -->
                <div class="form-group">
                    <label for="aufwand_id">Dein Zeitaufwand</label>
                    <select class="form-control" id="aufwand_id" name="aufwand_id">
                        <option value='1'>weniger als 1 Stunde</option>
                        <option value='2'>1 - 2 Stunden</option>
                        <option value='3'>3 - 4 Stunden</option>
                        <option value='4'>5 - 6 Stunden</option>
                        <option value='5'>Mehr als 6 Stunden</option>
                    </select>
                </div>



                <!-- Absenden -->
                <button type="submit" class="mb-5 btn btn-primary" name="gesendet">Senden</button>
   
				<br>
	<!-- Links zu anderen Erfassungseiten -->
				<!-- Link zu Modulerfassung -->
<a href="Erfassungsseite/modul.erfassung.php" class="btn btn-secondary mb-5">Nicht dein Modul dabei? Erfasse ein neues Modulprofil</a>
			
			</form>
        </div>
    </div>
</div>
	  			
	
<
   <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
  </body>
</html>


