

<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
   

    // Enregistrer les données du formulaire dans la table "entrees"
    if (isset($_POST['add_fournisseur'])) {
        $nomFournisseur = $_POST["nomFournisseur"];
        $adresseFournisseur = $_POST['AdresseFournisseur'];
        $emailFournisseur = $_POST['emailFournisseur'];
        $telFournisseur = $_POST["telFournisseur"];

        $sql = $con->prepare("INSERT INTO fournisseurs (Nom_Fournisseur, Adresse, E_Mail, tel_Fournisseurs) VALUES (?, ?, ?, ?)");
        $sql->bind_param("sssi", $nomFournisseur, $adresseFournisseur, $emailFournisseur, $telFournisseur);

        if ($sql->execute()) {
            echo "Les données ont été enregistrées avec succès";
            // Lorsque le produit est enregistre avec success, on ouvre la page des entree pour visualier le produt entree
            header("Location: ../Fournisseurs.php");
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
                        <h2>Nouveau fournisseur</h2>
                        <a href="../Fournisseurs.php" id="btnNewEntry">Retour</a>
                    </div>
                    <form id="productForm" method="POST" actions="">
                        <label>Nom Fournisseur: </label>
                        <input type="text" name="nomFournisseur" required>

                        <label>Adresse Fournisseur: </label>
                        <input type="text" name="AdresseFournisseur" required>

                        <label>E-mail Fournisseur: </label>
                        <input type="email" name="emailFournisseur" required>

                        <label>Tél Fournisseur: </label>
                        <input type="number" name="telFournisseur" required>

                        <button type="submit" name="add_fournisseur">Enregistrer</button>
                    </form>
                    
                </div>       
            </body>
        </html>
    <?php
?>