<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lernstrategien/Start by Lisa Vaske</title>
	
	 <!-- Bootstrap Verlinkung -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	  <link rel="stylesheet" type="text/css" href="../style.css">
	
</head>
<body>

    <header>
        <h1>LernenVerstehen</h1>
		
    </header>

    <main>
        <h2>Willkommen auf Erfassungs-Seite</h2>
        <!-- Hier kommt der Hauptinhalt deiner Seite -->
    </main>

	
	  <!-- Das ist meine Navigationsleiste mit Bootstrap -->
	  
	  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
		  
  <!-- Dropdownlink 1 -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Lerntypen</a></li>
      <li><a class="dropdown-item" href="#">Info 2</a></li>
      <li><a class="dropdown-item" href="#">Info 3</a></li>
		  </ul>     
		  
      <!-- Dropdownlink 2 -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Erfassung deiner Daten</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="Erfassungsseiten/lerntyp_erfassung.php">Lerntyp-Erfassung</a></li>
      <li><a class="dropdown-item" href="Erfassungsseiten/lernzeit_erfassung.php">Lernzeit-Erfassung</a></li>
      <li><a class="dropdown-item" href="Erfassungsseiten/student_erfassung.php">Student-Erfassung</a></li>
    </ul> 
	  
	  <!-- Dropdown Link 3 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Statistik Lerntypen</a></li>
      <li><a class="dropdown-item" href="#">Statistik Modulauwand</a></li>
      <li><a class="dropdown-item" href="#">Statistik Lerntypen/Lernerfolg</a></li>
    </ul> 
	  
		  <!-- Link zue Startseite -->
		   <li class="nav-item">
    <a class="nav-link" href="../index.php">Zurück zur Startseite</a>
  </li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	

	
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
