<?php
    include "Entreefunction.php";

    // Récupérer les informations du produit à partir de la base de données
    $id_produit = $_GET['id'];
    $produit = getAllEnterById("entrees", $id_produit);
    $nomProduit = "";
    $prixAchat = 0;

    if (mysqli_num_rows($produit) > 0) {
        $item = mysqli_fetch_assoc($produit);
        $nomProduit = $item['Nom_produit'];
        $prixAchat = $item['Prix_Achat'];
    }

    // Récupérer les clients
    $clients = getAllItem('clients');

    // Enregistrer les données du formulaire dans la table "sorties"
    if (isset($_POST['add_entrer'])) {
        $codeFacture = "NO_".rand(1111,9999);

        // Vérification du champ nomClient
        if (empty($_POST["nomClient"])) {
            die("Erreur : Veuillez sélectionner un client.");
        }
        $nomClient = mysqli_real_escape_string($con, $_POST["nomClient"]);

        $libelleOp = isset($_POST["libelleOperation"]) ? mysqli_real_escape_string($con, $_POST["libelleOperation"]) : null;
        $qteSortie = isset($_POST["quantiteSortie"]) ? (int)$_POST["quantiteSortie"] : 0;

        // Vérification de la quantité de produit
        $checkStock = $con->prepare("SELECT Quantitee_Entree FROM entrees WHERE Nom_produit = ?");
        $checkStock->bind_param("s", $nomProduit);
        $checkStock->execute();
        $result = $checkStock->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $stock = $row['Quantitee_Entree'];

            // Vérification de la quantité demandée par rapport au stock
            if ($qteSortie > $stock) {
                echo "Erreur : La quantité demandée est supérieure à la quantité en stock.";
            } else {
                // Mettre à jour la quantité dans le stock
                $newStock = $stock - $qteSortie;
                $updateStock = $con->prepare("UPDATE entrees SET Quantitee_Entree = ? WHERE Nom_produit = ?");
                $updateStock->bind_param("is", $newStock, $nomProduit);
                $updateStock->execute();

                // Enregistrer les informations dans la table "sorties"
                $insertSortieQuery = $con->prepare("INSERT INTO sorties (Code_Facture, Date_Sortie, Libelle_Op, Nom_produit, Qte_Sortie, Nom_Client, Prix_Sortie) VALUES (?, NOW(), ?, ?, ?, ?, ?)");
                $insertSortieQuery->bind_param("ssssis", $codeFacture, $libelleOp, $nomProduit, $qteSortie, $nomClient, $prixAchat);

                if ($insertSortieQuery->execute()) {
                    echo "Les données ont été enregistrées avec succès.";
                    header("Location: ListeProduit.php");
                } else {
                    die("Erreur d'enregistrement : " . $insertSortieQuery->error);
                }
            }
        } else {
            echo "Erreur : Produit non trouvé dans le stock.";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Sortie de Produits</title>
    <link rel="stylesheet" href="../Entreestyle.css">
    <script>
        // Fonction pour calculer le prix total
        function calculateTotal() {
            const quantite = document.getElementById('quantiteSortie').value;
            const prixAchat = document.getElementById('prixAchat').value;
            const total = quantite * prixAchat;
            document.getElementById('prixTotal').innerText = `Prix Total: ${total} FCFA`;
        }
    </script>
</head>
<body>
    <!-- Formulaire d'ajout/modification -->
    <div id="entryForm">
        <div class="new-enter-and-back">
            <h2>Nouvelle Sortie</h2>
            <a href="ListeProduit.php" id="btnNewEntry">Retour</a>
        </div>
        <form id="productForm" method="POST" action="">
            <label>Libellé Opération: </label>
            <input type="text" name="libelleOperation" required>

            <label>Nom Produit: </label>
            <input type="text" name="nomProduit" value="<?= $nomProduit ?>" readonly required>

            <label>Quantitée: </label>
            <input type="number" id="quantiteSortie" name="quantiteSortie" oninput="calculateTotal()" required>

            <label>Prix Achat: </label>
            <input type="number" id="prixAchat" name="prixAchat" value="<?= $prixAchat ?>" readonly required>

            <p id="prixTotal">Prix Total: 0 FCFA</p>

            <label>Nom Client: </label>
            <select name="nomClient" required>
                <option selected disabled>Selectionnez un client</option>
                <?php
                    if (mysqli_num_rows($clients) > 0) {
                        foreach ($clients as $client) {
                            echo "<option value='{$client['id']}'>{$client['nom_Client']}</option>";
                        }
                    } else {
                        echo "<option>Aucun client trouvé !</option>";
                    }
                ?>
            </select>
            <button type="submit" name="add_entrer">Enregistrer</button>
        </form>
    </div>
</body>
</html>