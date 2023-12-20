<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="CSS/lisa_vaske.css"
	
    <title>Lernstrategien/Start by Lisa Vaske</title>
	
	<!-- Definition vom Dokumententypen-->

	
<!-- Definition der Sprache "de" = deutsch -->
<html lang="de">

  <head>

	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	

	
	
	 
</head>
<body>
	
	
<div class="grid-container">
<div class="grid-item">
	
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
	
<img id="logo" src="bilder/Logo_rund1.png" alt="UnserLogo" width="100" height="100">	
	
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
							  
	  <!-- Vorname -->
                <div class="form-group">
                    <label for="Vorname">Vorname</label>
                    <textarea class="form-control" id="vorname" name="vorname" cols="3" rows="1"></textarea>
                </div>

                <!-- Nachname -->
                <div class="form-group">
                    <label for="nachname">Nachname</label>
                    <textarea class="form-control" id="nachname" name="nachname" cols="3" rows="1"></textarea>
                </div>


	
    <!-- Lernerfolg-->
                <div class="form-group">
                    <label for="lernid">Was ist dein Lernerfolg?</label>
                    <select class="form-control" id="lernid" name="lernid">
                        <option value='1'>nicht gelungen</option>
                        <option value='2'>mäßig gelungen</option>
                        <option value='3'>gelungen</option>
        
                    </select>
                </div>
		
		
	    <!-- Strategie -->
                <div class="form-group">
                    <label for="strategieid">Was ist deine Strategie?</label>
                    <select class="form-control" id="strategieid" name="strategieid">
                        <option value='1'>kognitiv</option>
                        <option value='2'>metakognitiv</option>
                        <option value='3'>ressourcenbezogen</option>
                   
                    </select>
                </div>
		
		    <!-- Semester -->
                <div class="form-group">
                    <label for="semesterid">Was ist dein Semester?</label>
                    <select class="form-control" id="semesterid" name="semesterid">
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
						<option value='5'>5</option>
                        <option value='6'>6</option>
					    <option value='7'>7</option>
                        <option value='8'>8</option>
                    </select>
                </div>

		
	<!-- Absende-Button-->
	<button type="submit" class="btn btn-primary" name="gesendet">Senden</button>
	</form>
		</div>
	<div class="col-md-4"></div>
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
