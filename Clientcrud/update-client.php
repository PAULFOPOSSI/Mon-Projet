<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
    $id = $_GET['id']; 
    
    // Enregistrer les données du formulaire dans la table "entrees"
    if(isset($_POST['update_fournisseur'])){
        $nomFournisseur = $_POST["nomFournisseur"];
        $adresseFournisseur = $_POST['AdresseFournisseur'];
        $emailFournisseur = $_POST['emailFournisseur'];
        $telFournisseur = $_POST["telFournisseur"];

        $sql = $con->prepare("UPDATE fournisseurs SET Nom_Fournisseur = ?, Adresse = ?, E_Mail = ?, tel_Fournisseurs = ? WHERE id = ?");
        $sql->bind_param("sssii", $nomFournisseur, $adresseFournisseur, $emailFournisseur, $telFournisseur, $id);

        if ($sql->execute()) {
            echo "Les données ont été modifié avec succès";
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
                    <h2>Modifier Les Caracteristiques d'un client</h2>
                    <a href="../Fournisseurs.php" id="btnNewEntry">Retour</a>
                </div>
                <form id="productForm" method="POST" actions="update.php">
                    <?php
                        if(isset($_GET['id']) && !empty($_GET['id']))    {
                            $entrer = getAllEnterById('fournisseurs', $id);

                            if(mysqli_num_rows($entrer) > 0){
                                $item = mysqli_fetch_assoc($entrer);
                                ?>
                                    <label>Nom Fournisseur: </label>
                                    <input type="text" name="nomFournisseur" value="<?= $item['Nom_Fournisseur'] ?>" required>

                                    <label>Adresse Fournisseur: </label>
                                    <input type="text" name="AdresseFournisseur" value="<?= $item['Adresse'] ?>" required>

                                    <label>E-mail Fournisseur: </label>
                                    <input type="email" name="emailFournisseur" value="<?= $item['E_Mail'] ?>" required>

                                    <label>Tél Fournisseur: </label>
                                    <input type="number" name="telFournisseur" value="<?= $item['tel_Fournisseurs'] ?>" required>
                                <?php
                            }
                        }
                    ?>
                    <button type="submit" name="update_fournisseur">Enregistrer</button>
                </form>
                
            </div>       
        </body>
        </html>
    <?php
?>