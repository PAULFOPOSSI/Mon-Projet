

<!DOCTYPE php>
<php lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestion des Stocks</title>
    <link rel="stylesheet" href="front.css">
    <script  ></script>
    <link rel="stylesheet" href="Dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar">
        <!-- Bouton pour afficher/masquer la sidebar -->
        <button class="sidebar-toggle" id="sidebar-toggle">
            <i class="fas fa-bars">menu</i>
        </button>
        <!-- SideBar CLose -->
        <button class="sidebar-close" id="sidebar-close">
                <i class="fas fa-times">X</i>
            </button>
        <!-- Logo de l'application -->
        <div class="navbar-logo">
            <img src="Logo.png"  alt="Logo">
        </div>
        <!-- pour les elements -->
         <div class="elements">
            <ul>
               <li id="li" ><a href="Fournisseurs.php">fournisseurs</a></li>
               <li id="li"><a href="Client.php">Clients</a></li>
               <li id="li"><a href="Cathegories.php">Cathegories</a></li>
        </ul>
         </div>
        <!-- Section droite de la navbar (recherche et mode nuit/jour) -->
        <div class="navbar-right">
            <!-- Bouton pour basculer entre le mode nuit et jour -->
            <button id="mode-toggle" class="navbar-btn"><i class="fas fa-moon">bouton</i></button>
            <!-- Barre de recherche -->
            <input type="text" placeholder="Rechercher..." class="search-bar">
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <!-- En-tête de la sidebar -->
        <div class="sidebar-header">
            <img src="logo.png" alt="Logo" class="logo">
            <!-- Fermer L'aside -->
            <button class="sidebar-close" id="sidebar-close">
                <i class="fas fa-times">Close</i>
            </button>
        </div>
        <!-- Menu de la sidebar -->
        <ul class="sidebar-menu" require_once = 'header.php' >
           
            <li><a href="TabBord.php"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a></li>
            <li><a href="Entree.php"><i class="fas fa-sign-in-alt"></i> Entrées</a></li>
            <li><a href="Sortie.php"><i class="fas fa-sign-out-alt"></i> Sorties</a></li>
            <li><a href="Commandes.php"><i class="fas fa-shopping-cart"></i> Commandes</a></li>
            <li><a href="Stock.php"><i class="fas fa-boxes"></i> Suivi de stock</a></li>
<<<<<<< HEAD
            <li><a href="ListeProduit/.php"><i class="fas fa-list"></i> Liste des produits</a></li>
=======
            <li><a href="ListeProduit.php"><i class="fas fa-list"></i> Liste des produits</a></li>
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
            <!-- <li><a href="../Rapport/Rapport.php"><i class="fas fa-chart-line"></i> Rapports prestations</a></li> -->
            <li><a href="Utilisateurs.php"><i class="fas fa-chart-line"></i> Utilisateurs</a></li>
            <li><a href="deconnexion.php"><i class="fas fa-chart-line"></i> Deconnexion</a></li>
            

            <!-- <li><a href="../Investissement/Investissements.php"><i class="fas fa-coins"></i> Investissement</a></li>
            <li><a href="../Gains/Gains.php"><i class="fas fa-money-bill-wave"></i> Gains</a></li>
        </ul> -->
    </aside>

    <!-- Contenu principal -->
    <main class="content" id="content">
        
         
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="Dash.js"></script>
            
       
    </main>

    <!-- Lien vers le fichier JavaScript -->
    <script src="front.js"></script>
</body>
</php>