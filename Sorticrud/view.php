<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
    $id = $_GET['id']; 
?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Gestion des Entrées de Produits</title>
            <link rel="stylesheet" href="../Entreestyle.css">
            <!-- <script defer src="/Entrees.js"></script> -->
        </head>
        <body>
            <!-- Formulaire d'ajout/modification -->
            <div id="entryForm">
                <div class="new-enter-and-back">
                    <h2>Details Sur Le Produit</h2>
                    <a href="Entree.php" id="btnNewEntry">Retour</a>
                </div>
                <form id="productForm" method="POST" actions="update.php">
                    <?php
                        if(isset($_GET['id']) && !empty($_GET['id']))    {
                            $entrer = getAllEnterById('entrees', $id);

                            if(mysqli_num_rows($entrer) > 0){
                                $item = mysqli_fetch_assoc($entrer);
                                ?>
                                <label>Code Facture: </label>
                                <input type="text" name="code_facture" value="<?= $item['Code_Facture'] ?>" diseable>

                                <label>Date: </label>
                                <input type="date" name="date" value="<?= $item['Date'] ?>" >
                                
                                <label>Libellé Opération: </label>
                                <input type="text" name="libelleOperation" value="<?= $item['Libelle_Op'] ?>" >

                                <label>Nom Produit: </label>
                                <input type="text" name="nomProduit" value="<?= $item['Nom_produit'] ?>" >
                                
                                <label>Cathegorie: </label>
                                <input type="text" name="Cathegorie" value="<?= $item['Cathegorie'] ?>" >

                                <label>Caractéristiques: </label>
                                <textarea name="caracteristiques" ><?= ($item['Caracteristiques']) ?></textarea>

                                <label>Quantitée Entrée: </label>
                                <input type="number" value="<?= $item['Quantitee_Entree'] ?>" name="quantiteEntree" >

                                <label>Nom Fournisseur: </label>
                                <input type="text" value="<?= $item['Nom_Fournisseur'] ?>" name="nomFournisseur" >

                                <label>Adresse Fournisseur: </label>
                                <input type="text" value="<?= $item['Adresse_Fournisseur'] ?>" name="AdresseFournisseur" >

                                <label>E-mail Fournisseur: </label>
                                <input type="email" value="<?= $item['Email_Fournisseur'] ?>" name="emailFournisseur" >

                                <label>Tél Fournisseur: </label>
                                <input type="number" value="<?= $item['Tel_Fournisseur'] ?>" name="telFournisseur" >

                                <label>P.Achat (Fcfa): </label>
                                <input type="number" value="<?= $item['Prix_Achat'] ?>" name="pAchat" >

                                <label>Stock Min: </label>
                                <input type="number" value="<?= $item['Stock_min'] ?>" name="stockMin" >

                                <label>Stock Max: </label>
                                <input type="number" value="<?= $item['Stock_max'] ?>" name="stockMax" >
                                <p></p>
                                <?php
                            }
                        }
                    ?>
                    <!-- <button type="submit" name="update_entrer">Enregistrer</button> -->
                </form>
                
            </div>       
        </body>
        </html>
    <?php
?>