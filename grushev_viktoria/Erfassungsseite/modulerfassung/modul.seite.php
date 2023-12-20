<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/grushev_css/grushev_css.css"> 
    <title>Modulprofil</title>
    	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	
               	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-fXxu7mz9ATKxIepV6+rnNS3EKlkNw0dbV4N+s3VNA6Z/rU6w+Yvdy4ZI6A0CnC5u" crossorigin="anonymous"></script>

</head>
	
<body>
     <!-- Header -->
	  <header>
	     <div>
            <h1>EduLearn</h1>
               </div>
                   <div>
					   <!-- Verlinkung Bild -->
                     <img src="../../../vaske_lisa/bilder/Logo_rund1.png" alt="Logo" class="logo">
                                                                                               </div>
                                                                                                 </header>

	  
	 <!-- Navigationsleiste mit Bootstrap -->
	  
	                                          <ul class="nav nav-tabs">
                                                  <li class="nav-item">
													  <!--Verlinkung zur Homestartseite von mir -->
                                                      <a class="nav-link active" aria-current="page" href="../../lerntyp_erfassung.php">Home</a>
                                                                    </li>
		  
  <!-- Dropdownlink 1 Bootstrap: Informationen -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen zu Lerntypen</a>
           <ul class="dropdown-menu">
		
			   <!-- Verlinkung für die einzelnen Seiten -->
      <li><a class="dropdown-item" href="../../Informationsseite/info_visuell.php">Lerntyp Visuell </a></li>
            <li><a class="dropdown-item" href="../../Informationsseite/info_auditiv.php"> Lerntyp Auditiv </a></li>
                 <li><a class="dropdown-item" href="../../Informationsseite/info_motorisch.php"> Lerntyp Motorisch </a></li>
		             <li><a class="dropdown-item" href="../../Informationsseite/info_kommunikativ.php"> Lerntyp Kommunikativ</a></li>
		                                                                                                                       </ul>     
		  
             <!-- Dropdownlink 2 Bootstrap: Erfassung deiner Daten-->
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Erfassung deiner  Daten</a>
                                             <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="../../lerntyp_erfassung.php"> Generelles Erfassungsformular </a></li>
                                                        <li>
												         	 <a class="dropdown-item" href="../lerntyperfassung/lerntyp.seite.php"> Neues Lerntyp-Profil anlegen</a> </li>
		                                                          <li><a class="dropdown-item" href="modul.seite.php"> Neues Modul-Profil anlegen</a></li>
                                                                     
						                                                                </ul> 
						  
	  
	                 <!-- Dropdownlink 3 Bootstrap: Statistikseiten --> 
           <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
                                        <ul class="dropdown-menu">
										
                       <li> <a class="dropdown-item" href="../../Statistiken/statistiklerntyp.php">Statistik Lerntypen </a></li>
	                        <li><a class="dropdown-item" href="../../Statistiken/modulstatistik/statistikmodul.php">Statistik Modul </a></li>
							  <li><a class="dropdown-item" href="../../Statistiken/generalstatistik/generalstatistik.php">Generelle statistik</a></li>
                                                                                                                                              </ul> 
	  
	   <!-- Link zur gemeinsamen Startseite -->
		                       <li class="nav-item">
                                          <a class="nav-link" href="../../../index.php">Zurück zur Startseite</a>
                                               </li>
	                                               </ul>
                                                      </div>
		<!-- Navigationsleiste zuende! -->
	  

</div>
<!-- Beginn von Formular -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- Formular -->
			<img src="../../Bilder/Modul.png" class="img-fluid" alt="...">
            <form action="modul.erfassung.php" method="post">
            <h3> Erfasse ein neues Modul!</h3>
             <!-- Blauer Text für neue Seite in Blocksatz und kursiver Schrift -->
<p style="color: blue; text-align: justify; font-style: italic;">Du findest in der Drop-Down Liste nicht das Modul was du lernst oder du hast ein bestimmtes Wahlpflichtfach? Kein Problem: Erzähl uns ein wenig über das Modul, füg es hinzu und du findest es rack-zack in der Modulübersicht!</p>		  
       	<p class="custom-form-group"> <input name = "modulname"> Modulname</input></p>
		<p class="custom-form-group"><input name = "modulbeschreibung"> Modulbeschreibung  </input></p>
		<p class="custom-form-group"><input name = "modulbewertung"> Prüfungsart </input></p>

                <!-- Absenden -->
                <button type="submit" class="mb-5 btn btn-primary" name="gesendet">Senden</button>
   
				<br>
	<!-- Links zu anderen Erfassungseiten -->
				<!-- Link zu Modulerfassung -->
<a href="../../lerntyp_erfassung.php" class="btn btn-secondary mb-5">Fertig? Dann zurück zur Erfassungsseite!</a>
<!-- Link zu Lerntyp -->

			
			
			</form>
        </div>
    </div>
</div>
	  			
	

   <footer class="bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
  </body>
</html>

