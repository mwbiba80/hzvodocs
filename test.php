<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SZVV Wedstrijden Team 152</title>
    <style>
        /* 1. Algemene basis styling (Zwart / Wit & Lettertype) */
        body {
            background-color: #000000;
            color: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        /* Container die de data van SZVV opvangt */
        .szvv-container {
            width: 100%;
            max-width: 100%;
            overflow-x: auto; /* Zorgt voor een subtiele scrollbar op héle kleine telefoons */
        }

        /* Dwing alle tekst, tabellen en links binnen de data naar wit */
        .szvv-container table, 
        .szvv-container td, 
        .szvv-container th, 
        .szvv-container a {
            color: #ffffff !important;
            border-color: #333333 !important; /* Subtiele donkergrijze randen voor tabel */
        }

        /* Maak de links klikbaar maar geef ze een nette look */
        .szvv-container a {
            text-decoration: underline;
        }

        /* 2. Responsieve tabel breedte */
        .szvv-container table {
            width: 100% !important;
            border-collapse: collapse;
        }

        .szvv-container th, 
        .szvv-container td {
            padding: 10px 8px;
            text-align: left;
        }

        /* ========================================================
           3. VERWIJDEREN VAN DE KOLOMMEN (Tijd en Sporthal)
           Opbouw SZVV tabel: 1:Datum, 2:Tijd, 3:Sporthal, 4:Comp, etc.
           ======================================================== */
        
        /* Verberg kolom 2 (Tijd) volledig */
        .szvv-container tr th:nth-child(2), 
        .szvv-container tr td:nth-child(2) { 
            display: none !important; 
        }

        /* Verberg kolom 3 (Sporthal) volledig */
        .szvv-container tr th:nth-child(3), 
        .szvv-container tr td:nth-child(3) { 
            display: none !important; 
        }
    </style>
</head>
<body>

    <div class="szvv-container">
        <?php
        // Haal de live data rechtstreeks op bij de SZVV API
        $url = "https://szvv.nl";
        
        // Laad de data in. Mocht file_get_contents uitstaan op je server, gebruik dan een fallback melding.
        $data = @file_get_contents($url);
        
        if ($data !== false) {
            echo $data;
        } else {
            echo "<p style='color: #ff3333;'>Fout bij het ophalen van de wedstrijdgegevens van SZVV.</p>";
        }
        ?>
    </div>

</body>
</html>
