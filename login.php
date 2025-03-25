
<?php
 require 'layout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion à la Base de Données</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="autre-card" >
        <!-- Logo -->
        <div class="logo">
            <img src="Logo3D2.png" id="im2"  alt="Logo">
            <h2 id="app" > Bienvenue dans votre Application web de Gestion de stock</h2>
        </div>
        <!-- Slogan -->
        <div class="slogan">
            
        <!-- Carte interne -->
        <div class="inner-card">
            <img src="logoAncien.jpg "width = "150px" alt="Logo">
            <h2 class="card-title">Connexion à la Base de Données</h2>
            <form method="POST" action="login.php">
                <!-- Nom d'utilisateur -->
                <div class="form-group">
                    <i class="fas fa-user icon"></i>
                    <input type="text" id="nom" name="nom" placeholder="Nom d'utilisateur" required>
                </div>
                <!-- Email -->
                <div class="form-group">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
                <!-- Mot de passe -->
                <div class="form-group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe" required>
                </div>
                <!-- Bouton de soumission -->
                <button type="submit" class="submit-btn" name="add_user">Se connecter</button>
                <p style="color: black;">Besoin d'un nouveau utilisateur ? <a href="MonLog.php">Ajouter</a></p>
            </form>
        </div>
    </div>

    <?php


// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//     $username = $conn -> real_escape_string($_POST["nom"]);
//     $email = $conn -> real_escape_string($_POST["email"]);
//     $password = $conn -> real_escape_string($_POST["mot_de_passe"]);
//     $hashpwd = password_hash($password, PASSWORD_DEFAULT);
//     $sql = "INSERT INTO `utilisateurs`(`nom`, `Mot_de_passe`, `email`) VALUES ('$username','$hashpwd', '$email')";

//     if ($conn -> query($sql)===TRUE){
//         echo"Succesfully added";
//     }else{
//         echo"Error".$sql.$conn -> error;
//     }
// }

?>
</body>
</html>