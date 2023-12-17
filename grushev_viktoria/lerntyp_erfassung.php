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
	  
	 <!-- Beginn von Formular -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- Formular -->
            <form action="verarbeitung.php" method="post">

                <!-- Lernziel -->
                <p>Lernziel<br/>
                    <select name="lernziel" id="lernziel"> 
                        <option value='1'>Verstehen</option>
                        <option value='2'>Auswendig lernen</option>
                        <option value='3'>Gestalten</option>
                        <option value='4'>Produzieren</option>
                    </select>
                </p>

                <!-- Aufgabe -->
                <p>Aufgabe<br/>
                    <textarea name="aufgabe" cols="45" rows="5"></textarea>
                </p>

                <!-- Textarea für die Inspiration -->
                <p>Inspiration<br/>
                    <textarea name="inspiration" cols="45" rows="5"></textarea>
                </p>

                <!-- Drop-down für den Lerntyp -->
                <p>Was ist dein Lerntyp?<br/>
                    <select name="lerntyp_id" id="lerntyp_id"> 
                        <option value='1'>Auditiv</option>
                        <option value='2'>Kommunikativ</option>
                        <option value='3'>Visuell</option>
                        <option value='4'>Motorisch</option>
                    </select>
                </p>

                <!-- Modul -->
                <p>Modul<br/>
                    <select name="modul_id" id="modul_id"> 
                        <option value='1'>Psychologie</option>
                        <option value='2'>Grundlagen der Ökonomie</option>
                        <option value='3'>Grundlagen der Gestaltung</option>
                        <option value='4'>Informatik</option>
                        <option value='5'>Mathematik</option>
                        <option value='6'>Englisch</option>
                        <option value='7'>Rechnungswesen und Controlling</option>
                    </select>
                </p>

                <!-- Absenden -->
                <button type="submit" class="mb-5 btn btn-outline-primary" name="gesendet">Senden</button>

            </form> <!-- Formular-Tag schließen -->
        </div>
    </div>
</div>

