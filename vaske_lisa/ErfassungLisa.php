<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lernstrategien/Start by Lisa Vaske</title>
	
	<!-- Definition vom Dokumententypen-->

	
<!-- Definition der Sprache "de" = deutsch -->
<html lang="de">
	
	<!-- Meta-Daten sind im Headbereich anzutreffen-->
  <head>
	  
	  <!-- Zeichensatz UTF-8 -->
    <meta charset="utf-8">
	  
	  <!-- Anzeigeeingenschaften für Geräte -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
  
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	<!-- Verknüpfung zur CSS-Datei -->
    <link rel="stylesheet" href="styles.css"> 
	
	
	
	
		
<style>
    /* CSS-Styling für das Logo */
    #logo {
      position: absolute;
      top: 1px; 
      right: 10px; 
    }
  </style>	
	
	
	 
</head>
<body>

    <header>
        <h1>EduLearn</h1>
		
    </header>

    <main>
        <h2>Willkommen auf Erfassungs-Seite</h2>
        <!-- Hier kommt der Hauptinhalt deiner Seite -->
    </main>

	
	  <!-- Das ist meine Navigationsleiste mit Bootstrap -->
	  
	  <ul class="nav nav-tabs">
  <li class="nav-item">
   <a class="nav-link" href="StartseiteLisa.php">Home</a></li>	
		  
		  
		  
  <!-- Dropdownlink 1 -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen</a>
    <ul class="dropdown-menu">
     
	  <a class="nav-link" href="InfoLisa/Lernstartegien.php">Lernstrategien</a></li>
		
	  <a class="nav-link" href="InfoLisa/Konzentration.php">Konzentration</a></li>
		
	  <a class="nav-link" href="InfoLisa/Motivation.php"> Motivation</a></li>
		
	
	  
	  </ul>     
		  
      <!-- Dropdownlink 2 -->
  <li class="nav-item dropdown">
   
  <a class="nav-link" href="../ErfassungLisa.php"> Erfassung deiner Daten</a></li>
	  
	  <!-- Dropdown Link 3 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
    
		  <a class="nav-link" href="StatistikLisa/Lernstrategien.php">Lernstrategien</a></li>
		
	  <a class="nav-link" href="StatistikLisa/Konzentration.php">Konzentration</a></li>
	
	  <a class="nav-link" href="StatistikLisa/Motivation.php">Motivation</a></li>
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
	
<img id="logo" src="bilder/Logo.jpg" alt="UnserLogo" width="200" height="100">	
	
</div>





<body>

<!-- Beginn Formular-Sektion-->
	
	<!-- Erzeugt Container von Bootstrap-->
	
<div class="container-fluid">
	<div class="mt-5 row">
	<div class="col-md-4">
		</div>
	
	<!-- 4: vier Spalten, (md) mittlerer Teil mit eigenen Daten-->
	<div class="col-md-4">
		
	<!-- Erstellung eines Formulars: Nach Absenden werden Eingabedaten an Verarbeitungs.php mit POST übermittelt-->
		
	<!-- php-Code für Verarbeitung in der Verarbeitungs.php zu finden-->
		

	<form action="VerarbeitungLisa.php" method="POST">
		
		<!-- Formular Studierende/r -->
		<!-- Form-Group für Bootstrap verwendet-->
		<div class="form-group">
							  
		<!-- For verbindet mit Studierende -->
							  
	 <label for="studierende">Gib deinen Vornamen ein:</label>									
	<input type="text" class="form-control" name="studierende" placeholder="Dein Vorname" required>
	</div>
		
		
	<!-- Formular Semester-->
	<div class="form-group">					  
	 	<label for="semester">Gib dein Semester ein:</label>									
		<input type="text" class="form-control" name="semester" placeholder="Dein Semester" required>
	</div>	
	
	
	<!-- Formular Lernerfolg-->
	<div class="form-group">					  
	 <label for="lernerfolg">Wähle deinen Lernerfolgsstatus:</label>									
	 <select class="form-control" name="lernerfolg">
		 <option value=""disabled selected>-Bitte wähle deinen Lernerfolgssstatus aus-</option>
		  <option value="gelungen">gelungen</option>
		  <option value="maessiggelungen">mäßig gelungen</option>
		  <option value="nichtgelungen">nicht gelungen</option>
		
	</select>
	</div>
		
		
	<!-- Formular Lernstartegie-->
	<div class="form-group">					  
	 <label for="lernstrategie">Wähle deine genutzte Lernstrategie:</label>									
	 <select class="form-control" name="lernstrategie">
		 <option value=""disabled selected>-Bitte wähle deine genutzte Lernstrategie aus-</option>
		  <option value="kognitivelernstrategie">kognitive Lernstartegie</option>
		  <option value="metakognitivelernstartegie">metakognitive Lernstrategie</option>
		  <option value="ressourcenbezogenelernstrategie">ressourcenbezogene Lernstrategie</option>
	</select>
	</div>
		
	<!-- Formular Zeitpunkt Beginn Nutzung Lernstrategie-->
	<div class="form-group">						  
	 <label for="zeitpunkt">Gib den Zeitpunkt ein, an dem du geonnen hast, die Lernstrategie zu nutzen:</label>						
	<input type="text" class="form-control" name="zeitpunkt" placeholder="Dein Zeitpunkt" required>
	</div>
	</br>	
		
	<!-- Absende-Button-->
	<button type="submit" class="btn btn-primary" name="gesendet">Senden</button>
	</form>
		</div>
	<div class="col-md-4"></div>
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
