<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="CSS/lisa_vaske.css">
	
 

	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
	
<body>
	
   
	  <header>
		  
    <h1>EduLearn</h1>
		  <div>
					  
   <img src="bilder/Logo_rund1.png" alt="Logo" class="logo">
		  </div>
</header>
		
  

<div class="grid-container">
<div class="grid-item">

    
	
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
		
	  <a class="nav-link" href="StatistikLisa/Lernerfolg.php">Lernerfolg</a></li>
	
	  
    </ul> 
	  
		  <!-- Link zur Startseite -->
		   <li class="nav-item">
	
	
	
	
    <a class="nav-link" href="../../index.php">Zurück zur Startseite</a>
  </li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  
		
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	

<main>
        <h2>Mache gerne mit bei unserer Erfassung!</h2>
        <!-- Hier kommt der Hauptinhalt deiner Seite -->
    </main>




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
	
	
	
	
	
     <!-- Bootstrap Footer -->
  <footer class="bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
</body>
</html>
