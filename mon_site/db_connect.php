<?php
// Paramètres de la connexion à la base de données
$host = 'localhost';
$dbname = 'newbd';
$username = 'root';
$password = '';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$newbd", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Gestion des erreurs
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());  // Afficher l'erreur en cas d'échec
}
?>
