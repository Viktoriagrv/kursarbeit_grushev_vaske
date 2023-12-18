<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Dynamisches Kuchendiagramm</title>
    
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Daten vom Server mit AJAX abrufen
            $.ajax({
                url: 'statistik_erfassung.php', // Verlinkung PHP Datei
                dataType: 'json',
                success: function (data) {
                    var chartData = new google.visualization.DataTable();
                    chartData.addColumn('string', 'Lerntyp');
                    chartData.addColumn('number', 'Anzahl');

                    // Annahme: Deine Daten haben 'lerntyp' und 'lerntyp_id' Spalten
                    for (var i = 0; i < data.length; i++) {
                        chartData.addRow([data[i].lerntyp, parseInt(data[i].anzahl)]);
                    }

                    var options = {
                        'title': 'Lerntypen Verteilung',
                        'width': 400,
                        'height': 300
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                    chart.draw(chartData, options);
                }
            });
        }
    </script>
</head>
<body>
    <div id="chart_div"></div>
</body>
</html>
