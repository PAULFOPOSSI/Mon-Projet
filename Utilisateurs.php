<?php
 require 'layout.php';
?>
<?php
// include "Dash/index.php";
 include "function.php";

// require 'layout.php';

// ob_start();

    // Récupérer les données de la table "utilisateurs"
    // $sql = "SELECT * FROM utilisateurs";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "Code Facture : " . $row["codeFacture"]. " - Date : " . $row["date"]. " - Nom Fournisseur : " . $row["nomFournisseur"]. " - Tél Fournisseur : " . $row["telFournisseur"]. " - Libellé Opération : " . $row["libelleOp"]. " - Nom Produit : " . $row["nomProduit"]. " - Quantité Entrée : " . $row["qteEntree"]. " - Stock Min : " . $row["stockMin"]. " - Stock Max : " . $row["stockMax"]. " - Caractéristiques : " . $row["caracteristiques"]. "<br>";
    //     }
    // } else {
    //     echo "Aucune donnée trouvée";
    // }

    // Fermer la connexion
    // $conn->close();

    ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Entrées de Produits</title>
    <link rel="stylesheet" href="Style.css">
   
</head>
<body>

    <div class="container">
        <h1>Gestion des Utilisateurs</h1>
        <div class="new-enter-and-back">
        <h2>Liste des Utilisateurs</h2>
            <a href="MonLog.php" id="btnNewEntry">Ajouter Utilisateur</a>
        </div>


        <!-- Pour la recuperation des donnees dans la bd-->
        <!-- Tableau des entrées de produits -->
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                </tr>
            </thead>
            <tbody id="productList">
                <?php
                    $allEnter = getAll("utilisateurs");
                    
                    if(mysqli_num_rows($allEnter) > 0){
                        foreach($allEnter as $item){
                            ?>
                                <tr>
                                    <td><?php echo $item['nom']; ?></td>
                                    <td><?php echo $item['email']; ?></td>
                                    <td><?php echo $item['Mot_de_passe']; ?></td>
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
