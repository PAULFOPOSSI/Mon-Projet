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
            <i class="fas fa-bars">MENU</i>
        </button>
        <!-- CLose SideBar -->
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
            <button id="mode-toggle" class="navbar-btn"><i class="fas fa-moon">MODE</i></button>
            <!-- Barre de recherche -->
            <input type="text" placeholder="Rechercher..." class="search-bar">
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <!-- En-tête de la sidebar -->
        <div class="sidebar-header">
            <img src="logo.png" alt="Logo" class="logo">
            <button class="sidebar-close" id="sidebar-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <!-- Menu de la sidebar -->
        <ul class="sidebar-menu" require_once = 'header.php' >
           
            <li><a href="TabBord.php"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a></li>
            <li><a href="Entree.php"><i class="fas fa-sign-in-alt"></i> Entrées</a></li>
            <li><a href="Sortie.php"><i class="fas fa-sign-out-alt"></i> Sorties</a></li>
            <li><a href="Commandes.php"><i class="fas fa-shopping-cart"></i> Commandes</a></li>
            <li><a href="Stock.php"><i class="fas fa-boxes"></i> Suivi de stock</a></li>
            <li><a href="ListeProduit.php"><i class="fas fa-list"></i> Liste des produits</a></li>
            <!-- <li><a href="../Rapport/Rapport.php"><i class="fas fa-chart-line"></i> Rapports prestations</a></li> -->
            <li><a href="Utilisateurs.php"><i class="fas fa-chart-line"></i> Utilisateurs</a></li>
            <li><a href="deconnexion.php"><i class="fas fa-chart-line"></i> Deconnexion</a></li>
            

            <!-- <li><a href="../Investissement/Investissements.php"><i class="fas fa-coins"></i> Investissement</a></li>
            <li><a href="../Gains/Gains.php"><i class="fas fa-money-bill-wave"></i> Gains</a></li>
        </ul> -->
    </aside>

    <!-- Contenu principal -->
    <main class="content" id="content">
        
            <h1 id="titre">Bievenu dans votre tableau de bord</h1>
        <div class="dashboard">
            <div class="top-stats">
                <div class="stat-box green">
                    <h3>Articles Utilisés</h3>
                    <p>90</p>
                </div>
                <div class="stat-box blue">
                    <h3>Montants Encaissé</h3>
                    <p>5 387 800 CFA</p>
                </div>
                <div class="stat-box green">
                    <h3>Montants Depensé</h3>
                    <p>458 500 CFA</p>
                </div>
                <div class="stat-box blue">
                    <h3>Nombres de prestations</h3>
                    <p>78</p>
                </div>
            </div>
        
            <div id="top">
                <div class="chart-section" id="Topvente">
                
                    <h2>Top des articles les plus utilisees</h2>
                    <ol>
                        <li>Disjoncteur</li>
                        <li>Moteur</li>
                        <li>Bobine</li>
                    </ol>
                </div>
                <div class="chart-section">
                
                    <h3>Évolution Mensuelle</h3>
                    <canvas id="chart"> </canvas>
                    
                </div>
                <div class="chart-section" id="Topvente">
                
                    <h2>Top des articles les plus utilisees</h2>
                </div>
            </div>
        
            <div class="top-clients">
                <h3>Top des Meilleurs Clients</h3>
                <ol>
                    <li>Consulat Général Haïti - 1 450 000 CFA</li>
                    <li>Pierre Louis - 800 000 CFA</li>
                    <li>SCA Star Construction - 500 000 CFA</li>
                </ol>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="Dash.js"></script>
            
       
    </main>

    <!-- Lien vers le fichier JavaScript -->
    <script src="front.js"></script>
</body>
</php>