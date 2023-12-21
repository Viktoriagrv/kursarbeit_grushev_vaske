<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../CSS/lisa_vaske.css">

    	
	<!-- Bootstrap-Einbindung -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	
               	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-fXxu7mz9ATKxIepV6+rnNS3EKlkNw0dbV4N+s3VNA6Z/rU6w+Yvdy4ZI6A0CnC5u" crossorigin="anonymous"></script>

</head>
	
<body>
     <!-- Header -->
<header>
	
		  
    <h1>EduLearn</h1>
		  <div>
					  
   <img src="../../bilder/Logo_rund1.png" alt="Logo" class="logo">
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
   
  <a class="nav-link" href="ErfassungLisa.php">Erfassung deiner Daten</a></li>
	  
	  <!-- Dropdown Link 3 --> 
	  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Statistiken</a>
    <ul class="dropdown-menu">
    
		  <a class="nav-link" href="StatistikLisa/Lernstrategien.php">Lernstrategien</a></li>
		
	
		<a class="nav-link" href="lernstrategiestatistik.php">Lernerfolg</a></li>

    </ul> 
	  
		  <!-- Link zur Startseite -->
		   <li class="nav-item">
	
	
	
	
    <a class="nav-link" href="../index.php">Zurück zur Startseite</a>
  </li>
 
</ul>
  <!-- Hier ist die Navigationsleiste zuende -->
	  






<!-- Beginn von Statistik -->
<div class="container-fluid">
    <div class="mt-5 mb-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
			<div id="chart_div"></div>
			<p class="blue-form"> </p>
			
 <p class="blue-form"> Welche Strategie wird in welchem Semester vermehrt angewendet? </p>
			
			
			
<!--Formular Wahl einer Strategie -->
	<form action="erfassung.php" method = "post">
	
		
		<td>&nbsp;</td>
					<td>
						<h1>Angewendete Strategien je Semester</h1>
						<br/>

						<p> Welche der drei Strategien Student_innen in welchem Semester vermehrt benutzen, kannst du ganz leicht checken. Einfach eine Strategie auswählen und go!</p>

                                  <select class="form-control" id="strategieid" name="strategieid">
                        <option value='1'>kognitiv</option>
                        <option value='2'>metakognitiv</option>
                        <option value='3'>ressourcenbezogen</option>
    </select>
		</div>
					
</td>
<br/><br/>
	
	        <!-- Button zum Abschicken des Formulars -->
			  <p class="text-center"><input type="submit" name="gesendet"></p>
	
	</form>			
			

</div>

			
</form>
        </div>
    </div>
</div>
	  	
			
			
   <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
      <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>
