<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viktorias Seite</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

	<h1> Erfassung deines Lerntypen </h1>
	  
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
      <li><a class="dropdown-item" href="#">Lertyp Datenerfassung</a></li>
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
	  
	  
<!-- Beginn Formular-Sektion -->
	  
<div class="container-fluid">
    <div class="mt-5 row">
        <div class="col-md-4">
        </div>
		<!-- Mittiger Teil -->
        <div class="col-md-4">
			
            <!-- Formular -->
		
			<form action="verarbeitung.php" method="POST">
				
			<!-- PHP-Code zur Verarbeitung der Formulardaten ist in der verarbeitungs.php-->
			
			<!-- Formularfelder -->
			<div class="form-group">
                <label for="benutzer"> Gib dir einen Benutzernamen:</label>
                <input type="text" class="form-control" name="benutzer" placeholder="Dein Benutzername" required>
            </div>
			
		
			<div class="form-group">
                <label for="modul">Wähle dein Modul:</label>
                <select class="form-control" name="modul">
                    <option value="" disabled selected>- Bitte wähle dein Modul aus -</option>
                    <option value="visuellekommunikation">Visuelle Kommunikation 1</option>
                    <option value="iteins">IT1</option>
                    <option value="itzwei">IT2</option>
                    <option value="speziellerjournalismus">Spezieller Journalismus</option>
                    <option value="mathematik">Mathematik</option>
                    <option value="medienundkommunikation">Medien und Kommunikation</option>
                    <option value="statistik">Statistik</option>
                    <option value="medienwirtschaftundmarketing">Medienwirtschaft und Marketing</option>
				
				</select>
            </div>
	
			
			<div class="form-group">
                <label for="lerntyp">Wähle deinen Lerntyp:</label>
                <select class="form-control" name="lerntyp">
                    <option value="" disabled selected>- Bitte wähle deinen Lerntyp aus -</option>
                    <option value="auditiv">Auditiv</option>
                    <option value="visuell">Visuell</option>
                    <option value="kommunikativ">Kommunikativ</option>
                    <option value="motorisch">Motorisch</option>
                </select>
            </div>
			
			<div class="form-group">
                <label for="inspiration">Beschreibe wie du mit deinem Lerntypen lernst:</label>
                <input type="text" class="form-control" name="inspiration" placeholder="Inspiriere andere" required>
            </div>
			
			  <!-- Absende-Button -->
    <button type="submit" class="btn btn-primary" name="gesendet">Senden</button>
</form>

		</form>
			
			
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

				
   <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>
<!-- Einbindung von Bootstrap Java Script -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 
  </body>
</html>

