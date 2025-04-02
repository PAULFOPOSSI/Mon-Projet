
<?php
require 'layout.php';
?>
<?php

// include "Dash/index.php";
include "Entreefunction.php";
// require 'layout.php';


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Entrées de Produits</title>
    <link rel="stylesheet" href="EntreeStyle.css">
    <script defer src="Front.js"></script>
</head>
<body>

    <div class="container">
        <h1>Suivie des stocks</h1>
        <div class="new-enter-and-back">
        <h2>Historique des Sortie</h2>
            <a href="ListeProduit.php" id="btnNewEntry">Nouvelle sortie</a>
        </div>

        <!-- Pour la recuperation des donnees dans la bd-->
        <!-- Tableau des entrées de produits -->
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Nom Client</th>
                    <th>Libellé Opération</th>
                    <th>Nom Produit</th>
                    <th>Quantité Sortie</th>
                </tr>
            </thead>
            <tbody id="productList">
                <?php
                    // Récupérer toutes les sorties
                    $allSorties = getAll("sorties");

                    if (mysqli_num_rows($allSorties) > 0) {
                        foreach ($allSorties as $item) {
                            ?>
                            <tr>
                                <!-- Afficher la date -->
                                <td><?php echo date("d-m-Y", strtotime($item['Date_Sortie'])); ?></td>

                                <!-- Afficher le nom du fournisseur -->
                                <td><?php echo $item['Nom_Client']; ?></td>

                                <!-- Afficher le libellé de l'opération -->
                                <td><?php echo $item['Libelle_Op']; ?></td>

                                <!-- Afficher le nom du produit -->
                                <td><?php echo $item['Nom_Produit']; ?></td>

                                <!-- Afficher la quantité sortie -->
                                <td><?php echo $item['Qte_Sortie']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>Aucune sortie trouvée.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
 
</body>
</html>
