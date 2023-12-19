<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
	
	<!-- auf mobilen Geräten anpassen-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--CSS-->
	 <link rel="stylesheet" href="../../stylesheet.css">
	
    <title>EduLearn</title>
	
	<!-- Definition vom Dokumententypen-->

	
<!-- Definition der Sprache "de" = deutsch -->
<html lang="de">
	
	<!-- Meta-Daten sind im Headbereich anzutreffen-->
	
	
		
<style>
    /* CSS-Styling für das Logo */
    #logo {
      position: absolute;
      top: 1px; 
      right: 10px; 
    }
  </style>	
	
	
	
	
  <head>
	 
	  
	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
	
</head>
	
	
	
	
<body>
    <header>
        <h1>Motivation</h1>
  
    </header>

	
	 <!-- Das ist meine Navigationsleiste mit Bootstrap -->
	  
	  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="../StartseiteLisa.php">Home</a></li>	
		  
		  
		  
		  
  <!-- Dropdownlink 1 -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen</a>
    <ul class="dropdown-menu">
     
	  <a class="nav-link" href="../InfoLisa/Lernstartegien.php">Lernstrategien</a></li>
		
	  <a class="nav-link" href="../InfoLisa/Konzentration.php">Konzentration</a></li>
		
	  <a class="nav-link" href="../InfoLisa/Motivation.php"> Motivation</a></li>
		
	
	
	  
	  
	  
	  
	  
	  </ul>     
		  
      <!-- Dropdownlink 2 -->
  <li class="nav-item dropdown">
   
  <a class="nav-link" href="../ErfassungLisa.php"> Erfassung deiner Daten</a></li>
	  
	  <!-- Dropdown Link 3 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
    
		  <a class="nav-link" href="Lernstrategien.php">Lernstrategien</a></li>
		
	  <a class="nav-link" href="Konzentration.php">Konzentration</a></li>
	
	  <a class="nav-link" href="Motivation.php">Motivation</a></li>
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
	
<img id="logo" src="../bilder/Logo_rund1.png" alt="UnserLogo" width="100" height="100">	
	
</div>



	
    <main>
        <h2>Willkommen auf der Statistik-Seite</h2>
        <!-- Hier kommt der Hauptinhalt deiner Seite -->
    </main>

	
	<!-- Bootstrap Karusell, noch anpassen!-->
<div id="motivation" class="folie">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#motivation" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Folie 1"></button>
    <button type="button" data-bs-target="#motivation" data-bs-slide-to="1" aria-label="Folie 2"></button>
    <button type="button" data-bs-target="#motivation" data-bs-slide-to="2" aria-label="Folie 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bilder/motivation.jpg" class="d-block w-100" alt="bild4">
      <div class="carousel-caption d-none d-md-block">
		  
<!--Hier Block farbig per style-->	
		<style>
.carousel-caption {
    background-color: #352525; 
}

		</style>
		  
        <h5>Motivation</h5>
        <p>Motivation kann uns das Lernen massiv erleichtern und versüßen.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bilder/motivation1.jpg" class="d-block w-100" alt="bild5">
      <div class="carousel-caption d-none d-md-block">
		  
<!--Hier Block farbig per style-->	
		<style>
.carousel-caption {
    background-color: #352525; 
}

		</style>
		  
        <h5>Das Wichtigste zuerst</h5>
        <p>Was du über Motivation wissen solltest.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bilder/motivation2.jpg" class="d-block w-100" alt="bild6">
      <div class="carousel-caption d-none d-md-block">
		  
<!--Hier Block farbig per style-->	
		<style>
.carousel-caption {
    background-color: #352525; 
}

		</style>
		  
        <h5>Fazit zur Motivation</h5>
        <p>Hier eine kleine Zusammenfassung.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#motivation" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">zurück</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#motivation" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">vor</span>
  </button>
</div>

<p> <a href="InfoLisa/Motivation.php">Klicke hier, um mehr über Motivation zu erfahren</a></p>


	
	
	
	
	
	
    <footer>
        <h3>Created by Lisa Vaske</h3>
        <p>Adresse: Wilhelmshaven</p>
        <p>Email: lisa.vaske@student.jade-hs.de</p>
	   <section> <p>In Koooperation mit der Jade Hochschule</p></section>
   </footer>
</body>
</html>
