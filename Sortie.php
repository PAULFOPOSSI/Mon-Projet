
<<<<<<< HEAD
    
    <!DOCTYPE html>
=======
<?php
require 'layout.php';
?>
<?php

// include "Dash/index.php";
include "Entreefunction.php";
// require 'layout.php';


?>


<!DOCTYPE html>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Gestion des Sorties de Produits</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="Sortie.js"></script>
=======
    <title>Gestion des Entrées de Produits</title>
    <link rel="stylesheet" href="EntreeStyle.css">
    <script defer src="Front.js"></script>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
</head>
<body>

    <div class="container">
<<<<<<< HEAD
        <h1>Gestion des Sorties de Produits</h1>
        <div class="new-enter-and-back">
        <h2>Historique des Entrees</h2>
            <a href="crud/add-out.php" id="btnNewEntry">Nouvelle Sortie</a>
=======
        <h1>Gestion des Sortie des Produits</h1>
        <div class="new-enter-and-back">
        <h2>Historique des Sortie</h2>
            <a href="ListeProduit.php" id="btnNewEntry">Nouvelle sortie</a>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
        </div>

        <!-- Détails du produit sélectionné -->
        <div id="productDetails" class="hidden">
            <h2>Détails du Produit</h2>
            <p id="detailsContent"></p>
            <button onclick="printDetails()">Imprimer</button>
        </div>

<<<<<<< HEAD
        <!-- Formulaire d'ajout/modification -->
=======
        <!-- Pour la recuperation des donnees dans la bd-->
        <!-- Tableau des entrées de produits -->
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
        <table>
            <thead>
                <tr>
                    <th>Date</th>
<<<<<<< HEAD
                    <th>Nom Fournisseur</th>
                    <th>Libellé Opération</th>
                    <th>Nom Produit</th>
                    <th>Quantité Entrée</th>
                    <th>Actions</th>
=======
                    <th>Nom Client</th>
                    <th>Libellé Opération</th>
                    <th>Nom Produit</th>
                    <th>Quantité Sortie</th>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
                </tr>
            </thead>
            <tbody id="productList">
                <?php
<<<<<<< HEAD
                    include "../Entrees/function.php";
                    
                    $allEnter = getAll("entrees");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            ?>
                                <tr>
                                    <td><?php echo $item['Date']; ?></td>
                                    <td><?php echo $item['Nom_Fournisseur']; ?></td>
                                    <td><?php echo $item['Libelle_Op']; ?></td>
                                    <td><?php echo $item['Nom_produit']; ?></td>
                                    <td><?php echo $item['Quantitee_Entree']; ?></td>
                                    <td>
                                        <a href="crud/view.php?id=<?= $item['id'] ?>" id="btnNewEntry" onclick="showDetails('<?php echo $item['Code_Facture']; ?>')">Détails</a>
                                        <a href="crud/update.php?id=<?= $item['id'] ?>" id="btnNewEntry" name="id_entrer">Modifier</a>
                                        <a href="#" id="btnNewEntry" onclick="deleteEntry('<?php echo $item['Code_Facture']; ?>')">Supprimer</a>
                                    </td>
                                </tr> 
                            <?php
                        }
=======
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
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
                    }
                ?>
            </tbody>
        </table>
<<<<<<< HEAD
        <h2>Historique des Entrees</h2>
    </div>
      
    <!-- <?php

    include "bdConnexion.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $code_facture = $conn -> real_escape_string($_POST["codeFacture"]);
        // $date = $conn -> real_escape_string($_POST["date"]);
        // $nom_fourissseur = $conn -> real_escape_string($_POST["nomClient"]);
        // $tel_Client = $conn -> real_escape_string($_POST["telClient"]);
        // $libelle_operation = $conn -> real_escape_string($_POST["libelleOp"]);
        // $nom_produit = $conn -> real_escape_string($_POST["nomProduit"]);
        // $quantite_entree = $conn -> real_escape_string($_POST["qteEntree"]);
        // $stock_Min = $conn -> real_escape_string($_POST["stockMin"]);
        // $stock_max = $conn -> real_escape_string($_POST["stockMax"]);
        // $caracteristiques = $conn -> real_escape_string($_POST["caracteristiques"]);
        
        
    
        if ($conn -> query($sql)===TRUE){
            echo"Utilsateur Ajoute Avec Success";
        }else{
            echo"Error".$sql.$conn -> error;
        }
    }
    
    ?> --> 
</body>
</html>
=======
    </div>
 
</body>
</html>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
