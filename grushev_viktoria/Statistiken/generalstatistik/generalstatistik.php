<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadaten für die Darstellung und Skalierung der Seite -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik-Dashboard</title>
    <!-- Stile für die Formatierung der Seite -->
    <style>
        
</head>
<body>

<!-- Überschrift des Dashboards -->
<h1>Statistik-Dashboard</h1>

<!-- Container für Statistikkarten -->
<div class="dashboard">
    <!-- Karte für Modul-Statistik -->
    <div class="card">
        <h2>Modul-Statistik</h2>
        <p>Anzahl: <span id="modulStat">Loading...</span></p>
    </div>

    <!-- Karte für Lerntyp-Statistik -->
    <div class="card">
        <h2>Lerntyp-Statistik</h2>
        <p>Anzahl: <span id="lerntypStat">Loading...</span></p>
    </div>

    <!-- Karte für Semester-Statistik -->
    <div class="card">
        <h2>Semester-Statistik</h2>
        <p>Anzahl: <span id="semesterStat">Loading...</span></p>
    </div>

    <!-- Karte für Aufwand-Statistik -->
    <div class="card">
        <h2>Aufwand-Statistik</h2>
        <p>Anzahl: <span id="aufwandStat">Loading...</span></p>
    </div>

    <!-- Weitere Karten für zusätzliche Statistiken könnten hier hinzugefügt werden -->

</div>

<!-- JavaScript-Code für die Aktualisierung der Statistiken -->
<script>
    // Simuliere den Datenabruf und die Aktualisierung der Statistiken nach 2 Sekunden
    setTimeout(() => {
        // Simulierter Serverabruf
        fetch('generalstatistik_erfassung.php') // Annahme: Der Server bietet eine API unter /api/statistics an
            .then(response => response.json())
            .then(data => {
                // Aktualisiere die Werte mit den Daten aus der Datenbank
                document.getElementById('modulStat').innerText = data.modulCount;
                document.getElementById('lerntypStat').innerText = data.lerntypCount;
                document.getElementById('semesterStat').innerText = data.semesterCount;
                document.getElementById('aufwandStat').innerText = data.aufwandCount;
            })
            .catch(error => console.error('Fehler beim Abrufen der Daten: ', error));
    }, 2000);
</script>

</body>
</html>

