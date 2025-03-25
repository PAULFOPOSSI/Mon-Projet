<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
    $id = $_GET['id']; 
    
    // Enregistrer les données du formulaire dans la table "entrees"
    if(isset($_POST['update_categorie'])){
        
        $libelle_cathegorie = $_POST["libelle_cathegorie"];

        $sql = $con->prepare("UPDATE cathegories SET libelle_cathegorie = ? WHERE id = ?");
        $sql->bind_param("si", $libelle_cathegorie, $id);

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
                    <a href="../Cathegories.php" id="btnNewEntry">Retour</a>
                </div>
                <form id="productForm" method="POST" actions="update.php">
                    <?php
                        if(isset($_GET['id']) && !empty($_GET['id']))    {
                            $entrer = getAllEnterById('cathegories', $id);

                            if(mysqli_num_rows($entrer) > 0){
                                $item = mysqli_fetch_assoc($entrer);
                                ?>
                                    <label>Libelle cathegorie: </label>
                                    <input type="text" name="libelle_cathegorie" value="<?= $item['libelle_cathegorie'] ?>" required>
                                <?php
                            }
                        }
                    ?>
                    <button type="submit" name="update_categorie">Enregistrer</button>
                </form>
                
            </div>       
        </body>
        </html>
    <?php
?>