
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
        <h1>Gestion des Entrées des Produits</h1>
        <div class="new-enter-and-back">
        <h2>Historique des Entrees</h2>
            <a href="Entreecrud/add-enter.php" id="btnNewEntry">Nouvelle Entrée</a>
        </div>

        <!-- Détails du produit sélectionné -->
        <div id="productDetails" class="hidden">
            <h2>Détails du Produit</h2>
            <p id="detailsContent"></p>
            <button onclick="printDetails()">Imprimer</button>
        </div>

        <!-- Pour la recuperation des donnees dans la bd-->
        <!-- Tableau des entrées de produits -->
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Nom Fournisseur</th>
                    <th>Libellé Opération</th>
                    <th>Nom Produit</th>
                    <th>Quantité Entrée</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productList">
                <?php
                    $allEnter = getAll("entrees");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            $id_fournisseur = $item['Nom_Fournisseur'];
                            ?>
                                <tr>
                                    <td><?php echo $item['Date']; ?></td>
                                    <?php
                                        $allEnter = getAllEnterById("fournisseurs", $id_fournisseur);
                                        
                                        if(mysqli_num_rows($allEnter) > 0){
                                            foreach($allEnter as $items){
                                                ?>
                                                    <td><?php echo $items['Nom_Fournisseur']; ?></td>
                                                <?php
                                            }   
                                        }
                                    ?>
                                    <td><?php echo $item['Libelle_Op']; ?></td>
                                    <td><?php echo $item['Nom_produit']; ?></td>
                                    <td><?php echo $item['Quantitee_Entree']; ?></td>
                                    <td>
                                        <a href="Entreecrud/view.php?id=<?= $item['id'] ?>" id="btnNewEntry" onclick="showDetails('<?php echo $item['Code_Facture']; ?>')">Détails</a>
                                        <a href="Entreecrud/update.php?id=<?= $item['id'] ?>" id="btnNewEntry" name="id_entrer">Modifier</a>
                                        <a href="#" id="btnNewEntry" onclick="deleteEntry('<?php echo $item['Code_Facture']; ?>')">Supprimer</a>
                                    </td>
                                </tr> 
                            <?php
                        }
<<<<<<< HEAD
=======
                    } else {
                        echo "<tr><td colspan='6'>Aucune entrée trouvée.</td></tr>";
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
                    }
                ?>
            </tbody>
        </table>
    </div>
 
</body>
</html>
