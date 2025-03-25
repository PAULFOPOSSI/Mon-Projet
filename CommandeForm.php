

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle entree </title>
    <link rel="stylesheet" href="CommandeStyle.css">
</head>
<body>
    <h1>Enregistrez vos nouvelles Commandes </h1>

    <div id="entryForm" >
            <h2>Nouvelle Commandes</h2>
            <form id="productForm" method="POST" actions="">
                <label>Ref Commande: </label>
                <input type="text" name="code_facture" required>

                <label>Date Du jour: </label>
                <input type="date" name="date" required>
                
                <label>Libellé Opération: </label>
                <input type="text" name="libelleOperation" required>

                <label>Nom Produit: </label>
                <input type="text" name="nomProduit" required>
                
                <label>Cathegorie: </label>
                <input type="text" name="Cathegorie" required>

                <label>Caractéristiques: </label>
                <textarea name="caracteristiques" required></textarea>

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
                <input type="number" name="DateLivraison" >

                
               <p></p>
                <button type="submit" name="add_entrer">Enregistrer</button>
            </form>
            
        </div>
</body>
</html>