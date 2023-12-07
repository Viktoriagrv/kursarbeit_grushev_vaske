<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine Webseite</title>
	
	 <!-- Bootstrap Verlinkung -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	  <link rel="stylesheet" type="text/css" href="../style.css">
	
</head>
<body>

    <header>
        <h1>Willkommen auf meiner Webseite!</h1>
    </header>

	
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
	  
	
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
	
	
	
	
	
	
	
	
	
	
	
   



	
   <footer>
        <h3>Created by Lisa Vaske</h3>
        <p>Adresse: Wilhelmshaven</p>
        <p>Email: lisa.vaske@student.jade-hs.de</p>
	   <section> <p>In Koooperation mit der Jade Hochschule</p></section>
   </footer>	
	
	</body>
	
</html>
