<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statistik</title>

    <!-- Bootstrap-Einbindung -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- ... (previous HTML code) ... -->

<!-- Google Charts Library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        
        <?php
		
// Fehlermeldung
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verbindung zur Datenbank herstellen mit meinen Daten
$servername = "localhost";
$username = "m12241-09";
$password = "l97tJZA8W";
$dbname = "m12241_09";

// Verbindung wird erstellt
$con = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde, sonst Fehlercode
if ($con->connect_error) {
    die("Verbindung fehlgeschlagen: " . $con->connect_error);}


 $query = "SELECT lerntyp_name, COUNT(*) as count FROM your_table_name GROUP BY lerntyp_name";
        $result = mysqli_query($connection, $query);

             $data = array();
               while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = array($row['lerntyp_name'], (int)$row['count']); }

        echo "var jsonData = " . json_encode($data) . ";";
		
        ?>
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Lerntyp');
        data.addColumn('number', 'Anzahl');
        data.addRows(jsonData);

        var options = {
            title: 'Verteilung der Lerntypen',
            is3D: true, // Optional: for a 3D effect
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

</head>

<body>

    <h1>Erfassung deiner Statistik</h1>

    <ul class="nav nav-tabs">
        <!-- Navigation links here -->
    </ul>

    <div class="container-fluid">
        <div class="mt-5 mb-5 row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="verarbeitung.php" method="post">
                    <!-- Form fields here -->

                    <!-- Chart Placeholder -->
                    <div id="chart_div" style="width: 100%; height: 400px;"></div>

                    <button type="submit" class="mb-5 btn btn-primary" name="gesendet">Senden</button>

                    <br>
                    <!-- Links to other pages -->
                    <a href="Erfassungsseite/modulerfassung/modul.seite.php" class="btn btn-secondary mb-5">Dein Modul ist noch nicht dabei? Erfasse ein neues Modulprofil!</a>

                    <a href="Erfassungsseite/lerntyperfassung/lerntyp.seite.php" class="btn btn-secondary mb-5">Dein ganz spezieller Lerntyp ist noch nicht dabei? Erfasse ein neues Lerntypprofil!</a>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Footer -->
    <footer class="fixed-bottom bg-primary text-center p-2">
        <p class="text-light mb-0">IT2 Kursarbeit von Viktoria Grushev und Lisa Vaske</p>
    </footer>

    <!-- Einbindung von Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
