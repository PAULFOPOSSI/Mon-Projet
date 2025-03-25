<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
    $id = $_GET['id']; 
    
    // Enregistrer les données du formulaire dans la table "entrees"
    if(isset($_POST['update_entrer'])){
        
        $codeFacture = $_POST["code_facture"];
        $date = $_POST["date"];
        $nomFournisseur = $_POST["nomFournisseur"];
        $adresseFournisseur = $_POST['AdresseFournisseur'];
        $emailFournisseur = $_POST['emailFournisseur'];
        $telFournisseur = $_POST["telFournisseur"];
        $libelleOp = $_POST["libelleOperation"];
        $nomProduit = $_POST["nomProduit"];
        $cathegorie = $_POST['Cathegorie'];
        $qteEntree = $_POST["quantiteEntree"];
        $prixAchat = $_POST['pAchat'];
        $stockMin = $_POST["stockMin"];
        $stockMax = $_POST["stockMax"];
        $caracteristiques = $_POST["caracteristiques"];

        $sql = $con->prepare("UPDATE entrees SET Code_Facture = ?, `Date` = ?, Libelle_Op = ?, Nom_produit = ?, Cathegorie = ?, Caracteristiques = ?, Quantitee_Entree = ?, Nom_Fournisseur = ?, Adresse_Fournisseur = ?, Email_Fournisseur = ?, Tel_Fournisseur = ?, Prix_Achat = ?, Stock_min = ?, Stock_max = ? WHERE id = ?");
        $sql->bind_param("ssssssisssiiiii", $codeFacture, $date, $libelleOp, $nomProduit, $cathegorie,$caracteristiques, $qteEntree, $nomFournisseur, $adresseFournisseur, $emailFournisseur, $telFournisseur, $prixAchat, $stockMin, $stockMax, $id);

        if ($sql->execute()) {
            echo "Les données ont été modifié avec succès";
        } else {
            echo "Erreur d'enregistrement : " . $sql . "<br>" . $con->error;
        }
    }
?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Gestion des Entrées de Produits</title>
            <link rel="stylesheet" href="../Entreestyle.css">
            <!-- <script defer src="Entrees.js"></script> -->
        </head>
        <body>
            <!-- Formulaire d'ajout/modification -->
            <div id="entryForm">
                <div class="new-enter-and-back">
                    <h2>Operation De Modfication</h2>
                    <a href="../Entree.php" id="btnNewEntry">Retour</a>
                </div>
                <form id="productForm" method="POST" actions="update.php">
                    <?php
                        if(isset($_GET['id']) && !empty($_GET['id']))    {
                            $entrer = getAllEnterById('entrees', $id);

                            if(mysqli_num_rows($entrer) > 0){
                                $item = mysqli_fetch_assoc($entrer);
                                ?>
                                <label>Code Facture: </label>
                                <input type="text" name="code_facture" value="<?= $item['Code_Facture'] ?>" required>

                                <label>Date: </label>
                                <input type="date" name="date" value="<?= $item['Date'] ?>" required>
                                
                                <label>Libellé Opération: </label>
                                <input type="text" name="libelleOperation" value="<?= $item['Libelle_Op'] ?>" required>

                                <label>Nom Produit: </label>
                                <input type="text" name="nomProduit" value="<?= $item['Nom_produit'] ?>" required>
                                
                                <label>Cathegorie: </label>
                                <input type="text" name="Cathegorie" value="<?= $item['Cathegorie'] ?>" required>

                                <label>Caractéristiques: </label>
                                <textarea name="caracteristiques" required><?= ($item['Caracteristiques']) ?></textarea>

                                <label>Quantitée Entrée: </label>
                                <input type="number" value="<?= $item['Quantitee_Entree'] ?>" name="quantiteEntree" >

                                <label>Nom Fournisseur: </label>
                                <input type="text" value="<?= $item['Nom_Fournisseur'] ?>" name="nomFournisseur" required>

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
                    <button type="submit" name="update_entrer">Enregistrer</button>
                </form>
                
            </div>       
        </body>
        </html>
    <?php
?>