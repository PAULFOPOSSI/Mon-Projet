<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produits</title>
</head>
<body>
    <h1>Liste des produits en stock</h1>
</body>
</html>
=======

<?php
    require 'layout.php';
    
    // include "Dash/index.php";
    include "Entreefunction.php";
    // require 'layout.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Produits disponibles en stocks</title>
    <link rel="stylesheet" href="EntreeStyle.css">
    <script defer src="Front.js"></script>
</head>
<body>

    <div class="container">
        <h1>Listes des Produits disponibles en stocks</h1>
        <div class="new-enter-and-back">

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
                    <th>Nom Produit</th>
                    <th>Quantite en stocks</th>
                    <th>Caracteristiques</th>
                    <th>Prix Achat</th>
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
                                <tr id="productRow" onclick="showDetails('<?php echo $item['Code_Facture']; ?>')">
                                    <td><?php echo $item['Nom_produit']; ?></td>
                                    <td style="color: <?php echo ($item['Quantitee_Entree'] <= 5) ? 'red' : 'black'; ?>">
                                        <?php echo $item['Quantitee_Entree']; ?>
                                    </td>
                                    <td><?php echo $item['Caracteristiques']; ?></td>
                                    <td><?php echo $item['Prix_Achat']; ?> FCFA</td>
                                    <td>
                                        <a href="add-out.php?id=<?= $item['id'] ?>" id="btnNewEntry" name="id_entrer">Sortie</a>
                                    </td>
                                </tr> 
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>Aucune entrée trouvée.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
 
</body>
</html>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
