<!-- Definition vom Dokumententypen-->
<!doctype html>

    <!-- Definition der Sprache "de" = deutsch -->
      <html lang="de">
	
	<!-- Meta-Daten im Headbereich-->
    <head>
	  
	<!-- Zeichensatz UTF-8 -->
    <meta charset="utf-8">
	  
	   <!-- Anzeigeeingenschaften für Geräte -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
	        
		   <!--Einbindung Stylesheet -->
		    <link rel="stylesheet" href="css/grushev_css/grushev_css.css">

		      <!-- Titel -->
               <title> Erfassung der Lerntypen </title>
	
	              <!-- Bootstrap-Einbindung -->
	                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		
                                                                                                                   </head>
		  
<!--Beginn Body -->
<body>
	<!-- Header -->
	  <header>
	     <div>
            <h1>EduLearn</h1>
               </div>
                   <div>
					   <!-- Verlinkung Bild -->
                     <img src="../vaske_lisa/bilder/Logo_rund1.png" alt="Logo" class="logo">
                                                                                         </div>
    
                                                                                        </header>

	                                   <!-- Navigationsleiste mit Bootstrap -->
	  
	                                          <ul class="nav nav-tabs">
                                                  <li class="nav-item">
													  <!--Verlinkung zur Homestartseite von mir -->
                                                      <a class="nav-link active" aria-current="page" href="lerntyp_erfassung.php">Home</a>
                                                                    </li>
		  
  <!-- Dropdownlink 1 Bootstrap: Informationen -->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informationen zu Lerntypen</a>
           <ul class="dropdown-menu">
		
			   <!-- Verlinkung für die einzelnen Seiten -->
      <li><a class="dropdown-item" href="Informationsseite/info_visuell.php">Lerntyp Visuell </a></li>
            <li><a class="dropdown-item" href="Informationsseite/info_auditiv.php"> Lerntyp Auditiv </a></li>
                 <li><a class="dropdown-item" href="Informationsseite/info_motorisch.php"> Lerntyp Motorisch </a></li>
		             <li><a class="dropdown-item" href="Informationsseite/info_kommunikativ.php"> Lerntyp Kommunikativ</a></li>
		                                                                                                                       </ul>     
		  
             <!-- Dropdownlink 2 Bootstrap: Erfassung deiner Daten-->
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Erfassung deiner  Daten</a>
                                             <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="lerntyp_erfassung.php"> Generelles Erfassungsformular </a></li>
                                                        <li>
												         	 <a class="dropdown-item" href="Erfassungsseite/lerntyperfassung/lerntyp.seite.php"Informationsseite/info_motorisch.php""> Neues Lerntyp-Profil anlegen</a> </li>
		                                                          <li><a class="dropdown-item" href="Erfassungsseite/modulerfassung/modul.seite.php"> Neues Modul-Profil anlegen</a></li>
                                                                     
						                                                                </ul> 
						  
	  
	                 <!-- Dropdownlink 3 Bootstrap: Statistikseiten --> 
           <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
                                        <ul class="dropdown-menu">
										
                       <li> <a class="dropdown-item" href="Statistiken/statistiklerntyp.php">Statistik Lerntypen </a></li>
	                        <li><a class="dropdown-item" href="Statistiken/modulstatistik/statistikmodul.php">Statistik Modul </a></li>
							  <li><a class="dropdown-item" href="Statistiken/generalstatistik/generalstatistik.php">Generalstatistik</a></li>
                                                                                                                                              </ul> 
	  
	   <!-- Link zur gemeinsamen Startseite -->
		                       <li class="nav-item">
                                          <a class="nav-link" href="../index.php">Zurück zur Startseite</a>
                                               </li>
	                                               </ul>
                                                      </div>
		<!-- Navigationsleiste zuende! -->
	 
		  <!-- Beginn von Inhalt -->
		    <!-- Bootstrap Grid-Layout -->
                <div class="container-fluid">
                      <div class="mt-5 mb-5 row">
                        <div class="col-md-4"></div>
                           <div class="col-md-4">
			
                                   <!-- Formular -->
							         <!-- Post Anfrage wird an Verarbeitung-php gesendet -->
                                      <form action="verarbeitung.php" method="post">
                                          <!-- Mein Bild eingebaut -->
										 <img src="Bilder/Dein interaktives Erfassungsformular.png" class="img-fluid" alt="...">
										  
                                              <!-- Lerntyp -->
                                                  <div class="custom-form-group">
                                                      <label for="lerntyp_id">Was für ein Lerntyp bist du?</label>
                                                         <select class="form-control" id="lerntyp_id" name="lerntyp_id">
															  <!-- PHP-Einbindung für dynamisches Dropdown-Menü -->
															 
                                                                  <?php
                                                                     // Include-Datei von meiner PHP für den Lerntyp 
                                                                       include('grunderfassung_lerntyp.php');
                                                                                                             ?>
                                                                                                                </select>
                                                                                                                     </div>
<br>
										  
										                              <!-- Modul -->
                                                                         <div class="custom-form-group">
                                                                           <label for="modul_id">Für welches Modul musst du was machen?</label>
                                                                             <select class="form-control" id="modul_id" name="modul_id">
                                                                                <?php
                                                                                  // Include-Datei von meiner PHP für das Modul
                                                                                     include('grunderfassung_modul.php');
                                                                                    ?>
                                                                                                 </select>
                                                                                                      </div>
<br>
				                                                                <!-- Semester -->
                                                                                  <div class="custom-form-group">
                                                                                     <label for="semester_id">In welchem Semester bist du?</label>
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
				
<br>
			                                                                  <!-- Aufwand -->
                                                                            <div class="custom-form-group">
                                                                             <label for="aufwand_id">Wie viel machst du aktuell für dieses Modul am Tag?</label>
                                                                             <select class="form-control" id="aufwand_id" name="aufwand_id">
                                                                             <option value='1'>weniger als 1 Stunde</option>
                                                                             <option value='2'>1 - 2 Stunden</option>
                                                                             <option value='3'>3 - 4 Stunden</option>
                                                                             <option value='4'>5 - 6 Stunden</option>
                                                                             <option value='5'>Mehr als 6 Stunden</option>
                                                                             </select>
										                                     </div>
										  
<br>                       
										  <!-- Keine Fremdschlüssel mehr, Freitextfelder -->
										  <!-- Aufgabe -->
                                                  <div class="custom-form-group">
                                                       <label for="aufgabe">Erkläre kurz was deine genaue Aufgabe ist:</label>
                                                           <textarea class="form-control" id="aufgabe" name="aufgabe" cols="45" rows="5"></textarea>
                                                                                              </div>

										  <br>
										  
										              <!-- Lernziel -->
                                                         <div class="custom-form-group">
                                                           <label for="lernziel">Was willst du heute als Meilenstein für diese Aufgabe erreichen?</label>
                                                              <textarea class="form-control" id="lernziel" name="lernziel" cols="45" rows="5"></textarea>
                                                                 </div>
										  <br>
                                                    <!-- Inspiration -->
                                                    <div class="custom-form-group">
                                                        <label for="inspiration">Inspiriere andere. Wie lernst du mit deinem Lerntypen für diese Aufgabe?</label>
                                                             <textarea class="form-control" id="inspiration" name="inspiration" cols="45" rows="5"></textarea>
                                                                     </div>
										                                    <br>
                <!-- Absende-Button -->
                <button type="submit" class="mb-5 btn btn-primary" name="gesendet">Senden</button>
   
				                           <br>
		<!-- Blauer Text für neue Seite in Blocksatz und kursiver Schrift, CSS DATEI "blue-text" -->
<p class="blue-text"> P.S: Dein Eintrag hat geklappt, wenn du nach dem Senden wieder hier landest und wieder leere Felder hast! Schau dir deinen Eintrag dann gerne in der Startseite an -> Nach dem refreshen findest du ihn dort! :) </p>
										  
	<!-- Blauer Text für neue Seite in Blocksatz und kursiver Schrift, CSS DATEI "blue-text" -->
<p class="blue-text">Diese Seite ist noch ganz neu! Das heißt: Manche deiner Module oder Lerntypen könnten nicht in der Auswahl angezeigt werden. Unterstütze uns gerne dabei, die Auswahl zu erweitern, und füge Lerntyp-Kombinationen und Module hinzu!</p>
								  
	<!-- Links zu anderen Erfassungseiten mit Bootstrap-Grau -->
				<!-- Link zu Modulerfassung -->
<a href="Erfassungsseite/modulerfassung/modul.seite.php" class="btn btn-secondary mb-5">Erfasse ein neues Modulprofil!</a>
				
							<!-- Link zu Lerntyp -->
<a href="Erfassungsseite/lerntyperfassung/lerntyp.seite.php" class="btn btn-secondary mb-5">Erfasse ein neues Lerntypprofil!</a>
			
			
			
			</form>
        </div>
    </div>
</div>
	  			
	

   <!-- Bootstrap Footer, CSS BLAU -->
     <footer class="bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer> 
		  
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
  </body>
</html>


