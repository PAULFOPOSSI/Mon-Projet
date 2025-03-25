

<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
   

    // Enregistrer les données du formulaire dans la table "entrees"
    if (isset($_POST['add_categorie'])) {
        $libelle_cathegorie = $_POST["libelle_cathegorie"];

        $sql = $con->prepare("INSERT INTO cathegories (libelle_cathegorie) VALUES (?)");
        $sql->bind_param("s", $libelle_cathegorie);

        if ($sql->execute()) {
            echo "Les données ont été enregistrées avec succès";
            // Lorsque le produit est enregistre avec success, on ouvre la page des entree pour visualier le produt entree
            header("Location: ../Cathegories.php");
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
                        <h2>Nouvelle Entrée</h2>
                        <a href="../Cathegories.php" id="btnNewEntry">Retour</a>
                    </div>
                    <form id="productForm" method="POST" actions="">
                        <label>Libelle de la categorie: </label>
                        <input type="text" name="libelle_cathegorie" required>
                        <button type="submit" name="add_categorie">Enregistrer</button>
                    </form>
                    
                </div>       
            </body>
        </html>
    <?php
?>