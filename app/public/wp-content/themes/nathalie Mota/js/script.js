document.addEventListener('DOMContentLoaded', function() {
   const modal = document.getElementById("contactModal");
   const btn = document.getElementById("menu-item-35");
    const span = document.getElementsByClassName("close")[0];

    // Quand l'utilisateur clique sur le bouton, ouvrir la modale
    btn.addEventListener('click', function() {
        modal.style.display = "block";
    });

    // Quand l'utilisateur clique sur le X, fermer la modale
    span.addEventListener('click', function() {
        modal.style.display = "none";
    });

    // Fermer la modale si l'utilisateur clique en dehors de la fenêtre
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});
