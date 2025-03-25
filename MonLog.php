
<?php
 require 'layout.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>  
      

     <div class="autre-card" > 
    <div class="logo">
        <img src="logo3D2" alt="logo">
        <h1 id="app">Bienvenue Votre application de gestion de stock</h1>
        <h3 class="text-light">veilez remplir ce formulaire pour <br>creer un nouvel utilisateur </h3>
    </div>
    <main class="p-5">
        <div class="inner-card">
        <img src="logoAncien.jpg "width = "150px" alt="Logo">
            <h2 class="card-title">INSCRIPTION</h2>
            <!-- <div class="d-flex justify-content text-align-center">
                <button type="button"><i class="bi bi-facebook me-2" style="color:rgb(149, 155, 163)"></i></button>
                <button type="button"><i class="bi bi-google me-2" style="color:rgb(149, 155, 163)"></i></button>
                <button type="button"><i class="bi bi-apple me-2" style="color:rgb(149, 155, 163)"></i></button>
            </div> -->
            <form method="POST" action="MonLog.php">
    <div class="form-group">
    <i class="fas fa-user icon"></i>
        <input type="text" class="form-control text-dark" id="nom" name="nom" placeholder="Nom_Utilisateur" required>
    </div>
    <div class="form-group">
    <i class="fas fa-envelope icon"></i>
        <input type="email" class="form-control text-dark" id="email" placeholder="E-mail" name="email" required>
    </div>
    <div class="form-group">
    <i class="fas fa-lock icon"></i>
        <input type="password" class="form-control text-dark" id="mot_passe" name="mot_passe" placeholder="Mot_de_passe" required>
    </div>
    <button type="submit" class="submit-btn" name="add_user">S'inscrire</button>
  
  </form>
      <p  style="color: black;">Vous avez déjà un compte? <a href="login.php">Connectez-vous</a></p>
        </div>

        <!-- <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalMessage">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div> -->
    </main>
    
    <script src="doc/js/bootstrap.bundle.min.js"></script>

    <?php

include "bdConnexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $conn -> real_escape_string($_POST["nom"]);
    $email = $conn -> real_escape_string($_POST["email"]);
    $password = $conn -> real_escape_string($_POST["mot_passe"]);
    $hashpwd = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `utilisateurs`(`nom`, `Mot_de_passe`, `email`) VALUES ('$username','$hashpwd', '$email')";

    if ($conn -> query($sql)===TRUE){
        echo"Utilsateur Ajoute Avec Success";
    }else{
        echo"Error".$sql.$conn -> error;
    }
}

?>

</body>
</html>