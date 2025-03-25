<?php
include('db_connect.php');  // Inclure la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $codeFacture = $_POST['codeFacture'];
    $date = $_POST['date'];
    $nomFournisseur = $_POST['nomFournisseur'];
    $telFournisseur = $_POST['telFournisseur'];
    $libelleOp = $_POST['libelleOp'];
    $nomProduit = $_POST['nomProduit'];
    $qteEntree = $_POST['qteEntree'];
    $caracteristiques = $_POST['caracteristiques'];
    $stockMin = $_POST['stockMin'];
    $stockMax = $_POST['stockMax'];

    // Insérer les données dans la base de données
    $sql = "INSERT INTO entrees (codeFacture, date, nomFournisseur, telFournisseur, libelleOp, nomProduit, qteEntree, caracteristiques, stockMin, stockMax)
            VALUES (:codeFacture, :date, :nomFournisseur, :telFournisseur, :libelleOp, :nomProduit, :qteEntree, :caracteristiques, :stockMin, :stockMax)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':codeFacture' => $codeFacture,
        ':date' => $date,
        ':nomFournisseur' => $nomFournisseur,
        ':telFournisseur' => $telFournisseur,
        ':libelleOp' => $libelleOp,
        ':nomProduit' => $nomProduit,
        ':qteEntree' => $qteEntree,
        ':caracteristiques' => $caracteristiques,
        ':stockMin' => $stockMin,
        ':stockMax' => $stockMax,
    ]);

    // Redirection vers la page d'affichage des produits
    header('Location: index.html');
    exit();
}
?>
