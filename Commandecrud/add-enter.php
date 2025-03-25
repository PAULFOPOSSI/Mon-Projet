<?php
    // include "Dash/index.php";
    include "../function.php";

    // Enregistrer les données du formulaire dans la table "entrees"
    if (isset($_POST['add_entrer'])) {
        $refCommande = $_POST["refCommande"];
        $date = $_POST["date"];
        $dateLiv = $_POST["dateLiv"];
        $nomFournisseur = $_POST["nomFournisseur"];
        $adresseFournisseur = $_POST['AdresseFournisseur'];
        $emailFournisseur = $_POST['emailFournisseur'];
        $telFournisseur = $_POST["telFournisseur"];
        $libelleOp = $_POST["libelleOperation"];
        $nomProduit = $_POST["nomProduit"];
        $cathegorie = $_POST['Cathegorie'];
        $caracteristique = $_POST['caracteristique'];
        $qteEntree = $_POST["quantiteEntree"];
        $prixAchat = $_POST['pAchat'];
        
        
       
        $sql = $con->prepare("INSERT INTO commandes (
                    	Ref_Commande, `Date_Jour`, Libelle_Operation, Nom_produit, Cathegorie, Caracteristiques, Quantitee_Entree, Nom_Fournisseur, Adresse_Fournisseur, Email_Fournisseur, Tel_Fournisseur, Prix_Achat, `Date_Livraison`
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssssisssiis", $codeFacture, $date, $libelleOp, $nomProduit, $cathegorie,$caracteristiques, $qteEntree, $nomFournisseur, $adresseFournisseur, $emailFournisseur, $telFournisseur, $prixAchat, $dateLiv);

        if ($sql->execute()) {
            echo "Les données ont été enregistrées avec succès";
            // Lorsque le produit est enregistre avec success, on ouvre la page des entree pour visualier le produt entree
            header("Location: ../Entree.php");
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
            <title>Gestion des Commandes de Produits</title>
            <link rel="stylesheet" href="../style.css">
            <!-- <script defer src="Entrees.js"></script> -->
        </head>
        <body>
            <!-- Formulaire d'ajout/modification -->
            <div id="entryForm">
                <div class="new-enter-and-back">
                    <h2>Nouvelle commande </h2>
                    <a href="../commandes.php" id="btnNewEntry">Retour</a>
                </div>
                <form id="productForm" method="POST" actions="add_entrer">
                    <label>Ref Commande: </label>
                    <input type="text" name="refCommande" required>

                    <label>Date Du jour: </label>
                    <input type="date" name="date" required>
                    
                    <label>Libellé Opération: </label>
                    <input type="text" name="libelleOperation" required>

                    <label>Nom Produit: </label>
                    <input type="text" name="nomProduit" required>
                    
                    <label>Cathegorie: </label>
                    <input type="text" name="Cathegorie" required>

                    <label>Caractéristiques: </label>
                    <textarea name="caracteristique" required></textarea>

                    <label>Quantitée Entrée: </label>
                    <input type="number" name="quantiteEntree" >

                    <label>Nom Fournisseur: </label>
                    <input type="text" name="nomFournisseur" required>

                    <label>Adresse Fournisseur: </label>
                    <input type="text" name="AdresseFournisseur" required>

                    <label>E-mail Fournisseur: </label>
                    <input type="email" name="emailFournisseur" required>

                    <label>Tél Fournisseur: </label>
                    <input type="number" name="telFournisseur" required>

                    <label>P.Achat (Fcfa): </label>
                    <input type="number" name="pAchat" >

                    <label>Date Livraison: </label>
                    <input type="date" name="dateLiv" >

                    <p></p>
                    <button type="submit" name="add_entrer">Enregistrer</button>
                </form>
                
            </div>       
        </body>
        </html>
    <?php
?>