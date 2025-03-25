
<?php
 require 'layout.php';
 include "Entreefunction.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Cathegories</title>
    <link rel="stylesheet" href="EntreeStyle.css">
    <script defer src="Front.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gestion des Cathegories des Produits</h1>
        <div class="new-enter-and-back">
        <h2>Differentes Cathegories</h2>
            <a href="Categoriecrud/add-categorie.php" id="btnNewEntry">Nouvelle Cathegorie</a>
        </div>

        <!-- Détails du produit sélectionné -->
        <div id="productDetails" class="hidden">
            <h2>Détails Cathegorie</h2>
            <p id="detailsContent"></p>
            <button onclick="printDetails()">Imprimer</button>
        </div>

        <!-- Pour la recuperation des donnees dans la bd-->
        <!-- Tableau des entrées de produits -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productList">
                <?php
                    $allEnter = getAll("cathegories");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            ?>
                                <tr>
                                    <td><?php echo $item['id']; ?></td>
                                    <td><?php echo $item['libelle_cathegorie']; ?></td>
                                    <td>
                                        <a href="Categoriecrud/update-categorie.php?id=<?= $item['id'] ?>" id="btnNewEntry">Modifier</a>
                                        <a href="Categoriecrud/delete-categorie.php?id=<?= $item['id'] ?>" id="btnNewEntry">Supprimer</a>
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