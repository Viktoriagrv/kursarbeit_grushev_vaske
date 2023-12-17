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
	
	
	
	
</head>
<body>

    <header>
        <h1>Lernstrategien-Übersicht: die besten Strategien für die Uni!</h1>
		
    </header>

	
	  <!-- Das ist meine Navigationsleiste mit Bootstrap -->
	  
	  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
		  
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
   
  <a class="nav-link" href="ErfassungLisa.php"> Erfassung deiner Daten</a></li>
	  
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
	
	
	
	
    <a class="nav-link" href="../index.php">Zurück zur Startseite</a>
  </li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  
	
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
	
	
	<br><h2>Von Zeitmanagement bis hin zu Lernmethoden: diese Lernstrategien führen dich zum Erfolg.</h2></br>
	
	<p><b>Lernen muss gelernt sein. Richtig zu lernen, ist gar nicht so einfach. Häufig fehlen die richtigen Ansätze und Methoden. Dazu macht es auch keinen Spaß. Oder? Mit den für Dich passenden Stategien und weiteren Tipps rund um Zeitmanagement, Motivation und Konzentration helfen wir <i>Dir</i> beim Durchstarten!</b>
	
	
<br><section>Man unterscheidet in drei verschiedene Lernstrategien: </section></br>
	<section>1. kognitive Strategien</section>
	<section>2. metakognitive Strategien</section>
	<section>3. ressourcenbezogene Startegien</section>
	
<p> <a href="InfoLisa/Lernstartegien.php">Klicke hier, um mehr über Lernstartegien zu erfahren</a></p>

<!-- Button aus bootstrap-->
	<button type="button" class="btn">Info Lernstrategien</button>



<!--ab hier inhaltlich Zeitmanagement-->
<br><p> Auch dein Zeitmanagement ist nicht unwichtig. Lernst du zu lange an einem Stück, schwindet deine Konzentration. Lernst du zu kurz, dann bist du vielleicht nur wenig erfolgreich. </br>
	<section>Alle wichtigen Tipps und Tricks hier auf einem Blick:</section>

			<!-- bootstrap Karusell, noch anpassen!-->
<div id="konzentration" class="folie">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#konzentration" data-bs-slide-to="0" class="active" aria-current="true" aria-label="folie 1"></button>
    <button type="button" data-bs-target="konzentration" data-bs-slide-to="1" aria-label="Folie 2"></button>
    <button type="button" data-bs-target="#konzentration" data-bs-slide-to="2" aria-label="Folie 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bilder/Konzentrationistock.jpg" class="d-block w-100" alt="bild1">

	
		
      <div class="carousel-caption d-none d-md-block">
	<!--Hier Block farbig per style-->	
		<style>
.carousel-caption {
    background-color: #352525; 
}

		</style>
		  
		  
        <h5>Konzentration</h5>
        <p>Konzentration ist wichtig für erfolgreiches Lernen.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bilder/Konzentration.jpg" class="d-block w-100" alt="bild2">
      <div class="carousel-caption d-none d-md-block">
		  
	<!--Hier Block farbig per style-->	
		<style>
.carousel-caption {
    background-color: #352525; 
}

		</style>
		  
		  
        <h5>Was schwächt die Konzentration?</h5>
        <p>Diese Dinge können deinen Lernerfolg hemmen.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bilder/Konsentration2.jpg" class="d-block w-100" alt="bild3">
      <div class="carousel-caption d-none d-md-block">
		  
	<!--Hier Block farbig per style-->	
		<style>
.carousel-caption {
    background-color: #352525; 
}

		</style>
		  
		  
        <h5>Was verbessert meine Konzentration?</h5>
        <p>Wir geben dir einen Weg zu mehr Konzentration an die Hand.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#konzentration" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">zurück</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#konzentration" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">vor</span>
  </button>
</div>

<p> <a href="InfoLisa/Konzentration.php">Klicke hier, um mehr über Konzentration zu erfahren</a></p>




<!-- ab hier inhaltlich Motivation-->
<br>Den meisten Menschen fehlt die Motivation für das Lernen. Ist auch kein Wunder bei dem drögen Auswendiglernen. Wenn die Inhalte nicht motivieren, wende folgende Hacks an und du findest dennoch nötige Motivation:</br>


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
