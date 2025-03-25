

<?php
    // include "Dash/index.php";
    include "../Entreefunction.php";
   

    // Enregistrer les données du formulaire dans la table "entrees"
    if (isset($_POST['add_entrer'])) {
        $codeFacture = "NO_".rand(1111,9999);
        $date = $_POST["date"];
        $nomFournisseur = $_POST["nomFournisseur"];
        $libelleOp = $_POST["libelleOperation"];
        $nomProduit = $_POST["nomProduit"];
        $cathegorie = $_POST['Cathegorie'];
        $qteEntree = $_POST["quantiteEntree"];
        $prixAchat = $_POST['pAchat'];
        $stockMin = $_POST["stockMin"];
        $stockMax = $_POST["stockMax"];
        $caracteristiques = $_POST["caracteristiques"];

        $sql = $con->prepare("INSERT INTO entrees (
                    Code_Facture, `Date`, Libelle_Op, Nom_produit, Cathegorie, Caracteristiques, Quantitee_Entree, Nom_Fournisseur, Prix_Achat, Stock_min, Stock_max
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssssisiii", $codeFacture, $date, $libelleOp, $nomProduit, $cathegorie,$caracteristiques, $qteEntree, $nomFournisseur, $prixAchat, $stockMin, $stockMax);

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
            <title>Gestion des Entrées de Produits</title>
            <link rel="stylesheet" href="../Entreestyle.css">
            <!-- <script defer src="Entrees.js"></script> -->
        </head>
        <body>
            <!-- Formulaire d'ajout/modification -->
            <div id="entryForm">
                <div class="new-enter-and-back">
                    <h2>Nouvelle Entrée</h2>
                    <a href="../Entree.php" id="btnNewEntry">Retour</a>
                </div>
                <form id="productForm" method="POST" actions="">
                    <label>Date: </label>
                    <input type="date" name="date" required>
                    
                    <label>Libellé Opération: </label>
                    <input type="text" name="libelleOperation" required>

                    <label>Nom Produit: </label>
                    <input type="text" name="nomProduit" required>
                    
                    <label for="">Cathegories</label>
                    <select name="Cathegorie" id="" required onchange="showLevelSelect(this.value)">
                        <option selected diseabled>Selectionnez une cathegories</option>
                        <?php
                            $cathegorie = getAllItem('cathegories');

                            if(mysqli_num_rows($cathegorie) > 0){
                                foreach($cathegorie as $item){
                                    ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['libelle_cathegorie'] ?></option>
                                    <?php
                                }
                            } else {
                                echo "<option>Aucune categorie trouve !</option>";
                            }
                        ?>
                    </select>

                    <label>Caractéristiques: </label>
                    <textarea name="caracteristiques" required></textarea>

                    <label>Quantitée Entrée: </label>
                    <input type="number" name="quantiteEntree" >

                    <label for="">Nom fourniseurs</label>
                    <select name="nomFournisseur" id="" required onchange="showLevelSelect(this.value)">
                        <option selected diseabled>Selectionnez un fornisseur</option>
                        <?php
                            $cathegorie = getAllItem('fournisseurs');

                            if(mysqli_num_rows($cathegorie) > 0){
                                foreach($cathegorie as $item){
                                    ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['Nom_Fournisseur'] ?></option>
                                    <?php
                                }
                            } else {
                                echo "<option>Aucune categorie trouve !</option>";
                            }
                        ?>
                    </select>

                    <label>P.Achat (Fcfa): </label>
                    <input type="number" name="pAchat" >

                    <label>Stock Min: </label>
                    <input type="number" name="stockMin" >

                    <label>Stock Max: </label>
                    <input type="number" name="stockMax" >
                    <p></p>
                    <button type="submit" name="add_entrer">Enregistrer</button>
                </form>
                
            </div>       
        </body>
        </html>
    <?php
?>