<?php
include('db_connect.php');  // Inclure la connexion à la base de données

$sql = "SELECT * FROM entrees";  // Récupérer toutes les entrées de la table 'entrees'
$stmt = $pdo->query($sql);
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($produits as $produit) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($produit['codeFacture']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['date']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['nomFournisseur']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['telFournisseur']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['libelleOp']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['nomProduit']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['qteEntree']) . "</td>";
    echo "<td>" . htmlspecialchars($produit['caracteristiques']) . "</td>";
    echo "</tr>";
}
?>
