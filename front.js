
const sidebarToggle = document.getElementById('sidebar-toggle');
const sidebarClose = document.getElementById('sidebar-close');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('content');
const modeToggle = document.getElementById('mode-toggle');
const body = document.body;

// Ouvre la sidebar
sidebarToggle.addEventListener('click', () => {
    sidebar.classList.add('active');
    content.classList.add('shifted');
});

// Ferme la sidebar
if(sidebarClose){
sidebarClose.addEventListener('click', () => {
    sidebar.classList.remove('active');
    content.classList.remove('shifted');
});
}

// Basculer entre le mode nuit et jour
modeToggle.addEventListener('click', () => {
    body.classList.toggle('night-mode');
    sidebar.classList.toggle('night-mode');
    navbar.classList.toggle('night-mode');
});

// hjkjb
const sidebarLinks = document.querySelectorAll('.sidebar-link');
const main = document.getElementById('content');

sidebarLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        const page = link.getAttribute('data-page'); // Récupère le fichier à charger

        // Effectue une requête pour charger le contenu
        fetch(page)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors du chargement de la page');
                }
                return response.text();
            })
            .then(data => {
                content.innerHTML = data; // Injecte le contenu dans #content
            })
            .catch(error => {
                main.error('Erreur:', error);
                main.innerHTML = '<p>Impossible de charger le contenu.</p>';
            });
    });
});