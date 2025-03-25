
<?php
 require 'layout.php';
 include "Entreefunction.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesCathegories</title>
    <link rel="stylesheet" href="EntreeStyle.css">
    <script defer src="Front.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gestion des Fournisseurs</h1>
        <div class="new-enter-and-back">
        <h2>Liste des Fournisseurs</h2>
            <a href="Fournisseurcrud/add-fournisseur.php" id="btnNewEntry">Nouveau Fournisseur</a>
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
                    <th>ID</th>
                    <th>Nom Fournisseur</th>
                    <th>Adresse</th>
                    <th>E_Mail</th>
                    <th>Telephone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productList">
                <?php
                    $allEnter = getAllItem("fournisseurs");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            ?>
                                <tr>

                                    <td><?php echo $item['id']; ?></td>
                                    <td><?php echo $item['Nom_Fournisseur']; ?></td>
                                    <td><?php echo $item['Adresse']; ?></td>
                                    <td><?php echo $item['E_Mail']; ?></td>
                                    <td><?php echo $item['tel_Fournisseurs']; ?></td>
                                    <td>
                                        <a href="Fournisseurcrud/update-fournisseur.php?id=<?= $item['id'] ?>" id="btnNewEntry">Modifier</a>
                                        <a href="Fournisseurcrud/delete-fournisseur.php?id=<?= $item['id'] ?>" id="btnNewEntry">Supprimer</a>
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