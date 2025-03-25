<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
   

    // Enregistrer les données du formulaire dans la table "entrees"
    if (isset($_POST['add_client'])) {
        $nomclient = $_POST["nomclient"];
        $adresseclient = $_POST['Adresseclient'];
        $emailclient = $_POST['emailclient'];
        $telclient = $_POST["telclient"];

        $sql = $con->prepare("INSERT INTO clients (nom_Client, Adresse, Tel_Client, E-Mail) VALUES (?, ?, ?, ?)");
        $sql->bind_param("sssi", $nomclient, $adresseclient, $telclient, $emailclient);

        if ($sql->execute()) {
            echo "Les données ont été enregistrées avec succès";
            // Lorsque le produit est enregistre avec success, on ouvre la page des entree pour visualier le produt entree
            header("Location: ../clients.php");
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
                        <h2>Nouveau client</h2>
                        <a href="../clients.php" id="btnNewEntry">Retour</a>
                    </div>
                    <form id="productForm" method="POST" actions="">
                        <label>Nom client: </label>
                        <input type="text" name="nomclient" required>

                        <label>Adresse client: </label>
                        <input type="text" name="Adresseclient" required>

                        <label>Tél client: </label>
                        <input type="number" name="telclient" required>


                        <label>E-mail client: </label>
                        <input type="email" name="emailclient" required>

                       
                        <button type="submit" name="add_client">Enregistrer</button>
                    </form>
                    
                </div>       
            </body>
        </html>
    <?php
?>