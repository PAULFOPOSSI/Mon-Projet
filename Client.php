
<?php
 require 'layout.php';
 include "Entreefunction.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesCathegories</title>
    <link rel="stylesheet" href="EntreeStyle.css">
    <script defer src="Front.js"></script>
</head>
<body>
    <div class="container">
        <h1>Gestion des Clients</h1>
        <div class="new-enter-and-back">
        <h2>Liste des Clients</h2>
            <a href="Clientcrud/add-Client.php" id="btnNewEntry">Nouveau Client</a>
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
                    <th>Nom Client</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>E_Mail</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productList">
                <?php
                    $allEnter = getAllItem("clients");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            ?>
                                <tr>

                                    <td><?php echo $item['id']; ?></td>
                                    <td><?php echo $item['nom_Client']; ?></td>
                                    <td><?php echo $item['Adresse']; ?></td>
                                    <td><?php echo $item['Tel_Client']; ?></td>
                                    <td><?php echo $item['E-Mail']; ?></td>
                                    
                                    <td>
                                        <a href="Clientcrud/update-Client.php?id=<?= $item['id'] ?>" id="btnNewEntry">Modifier</a>
                                        <a href="Clientcrud/delete-Client.php?id=<?= $item['id'] ?>" id="btnNewEntry">Supprimer</a>
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