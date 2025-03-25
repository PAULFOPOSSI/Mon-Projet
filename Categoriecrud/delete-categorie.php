<?php
    include "../Entreefunction.php";

    if (isset($_POST["delete"]) && isset($_GET["id"])) {
        $id = $_GET["id"];

        // Préparez la requête de suppression
        $stmt = $con->prepare("DELETE FROM cathegories WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Success";
            header("Location: ../Cathegories.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $con->close();
    } else {
        echo "Error: ID not set";
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Supprimer une categorie</title>
        <link rel="stylesheet" href="del.css">
    </head>
    <body>
    <div class="container">
        <h1>Supprimer Cette Cathegorie</h1>

        <?php
            $id = $_GET["id"];
            if ($id !== null) : 
        ?>
            <p>Êtes-vous sûr de vouloir supprimer Cette Cathegorie <?php echo $id; ?>?</p>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>?id=<?php echo $id; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="delete" value="Oui, supprimer">  <!-- Bouton pour confirmer la suppression -->
                <a href="../Cathegories.php">Non, annuler</a>   <!-- Lien pour annuler et retourner à la liste des utilisateurs -->
            </form>
        <?php 
            endif; 
        ?>

        <?php
            // Vérification si l'ID est correct et si le formulaire de confirmation est soumis
            if ($id !== null && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
                // Ici, vous pouvez ajouter le code pour effectuer la suppression de l'utilisateur
                // Assurez-vous de gérer correctement la suppression et de rediriger l'utilisateur après suppression
            }
        ?>
    </div>      
    </body>
</html>