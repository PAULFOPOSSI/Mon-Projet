
<?php
 require 'layout.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="Dash.css">
</head>
<body>
    <h1 id="titre">Bievenu dans votre tableau de bord</h1>
<div class="dashboard">
    <div class="top-stats">
        <div class="stat-box green">
            <h3>Articles Vendus</h3>
            <p>90</p>
        </div>
        <div class="stat-box blue">
            <h3>Montants Facturés</h3>
            <p>5 387 800 CFA</p>
        </div>
        <div class="stat-box green">
            <h3>Montants Recouvrés</h3>
            <p>4 582 800 CFA</p>
        </div>
        <div class="stat-box blue">
            <h3>Reste à Payer Clients</h3>
            <p>780 000 CFA</p>
        </div>
    </div>

    <div id="top">
        <div class="chart-section" id="Topvente">
        
            <h2>Top des articles les plus utilisees</h2>
        </div>
        <div class="chart-section">
        
            <h3>Évolution Mensuelle</h3>
            <canvas id="chart"></canvas>
            
        </div>
        <div class="chart-section" id="Topvente">
        
            <h2>Top des articles les plus utilisees</h2>
        </div>
    </div>

    <div class="top-clients">
        <h3>Top des Meilleurs Clients</h3>
        <ul>
            <li>Consulat Général Haïti - 1 450 000 CFA</li>
            <li>Pierre Louis - 800 000 CFA</li>
            <li>SCA Star Construction - 500 000 CFA</li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="script.js"></script>
</body>
</html>