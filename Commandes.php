<?php
// include "Dash/index.php";
 include "Commandefunction.php";
//  require 'layout.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Commandes</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <div class="container">
        <h1>Gestion des Commandes</h1>
        <div class="new-enter-and-back">
        <h2>Historique des Commandes</h2>
            <a href="commandecrud/add-enter.php" id="btnNewEntry">Nouvelle commande</a>
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
                    $allEnter = getAll("commandes");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            ?>
                                <tr>
                                    <td><?php echo $item['Date_Jour']; ?></td>
                                    <td><?php echo $item['Nom_Fournisseur']; ?></td>
                                    <td><?php echo $item['Libelle_Operation']; ?></td>
                                    <td><?php echo $item['Nom_Produit']; ?></td>
                                    <td><?php echo $item['Quantitee_Entree']; ?></td>
                                    <td>
                                        <a href="Commandecrud/view.php?id=<?= $item['id'] ?>" id="btnNewEntry" onclick="showDetails('<?php echo $item['Ref_Commande']; ?>')">Détails</a>
                                        <a href="Commandecrud/update.php?id=<?= $item['id'] ?>" id="btnNewEntry" name="id_entrer">Modifier</a>
                                        <a href="#" id="btnNewEntry" onclick="deleteEntry('<?php echo $item['Ref_Commande']; ?>')">Supprimer</a>
                                    </td>
                                </tr>   
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>

